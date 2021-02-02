<?php

namespace App\Http\Livewire\Base;

use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;

    public $component;

    protected $listeners = ['changeComponent', 'logout'];

    public function mount(...$params)
    {
        if (count($params) < 1) {
            $component = config('larawire.root_component');
        } else {
            $component = implode('.', $params);
        }

        if (!$compClassName = $this->getClass($component)) {
            // cek sekali lagi dengan asumsi ada class index di dalamnya
            $component .= '.index';
            if (!$compClassName = $this->getClass($component)) {
                abort(404);
            }
        }

        $this->authorizeComponent($compClassName);
        if (in_array($component, config('larawire.auth_components'))) {
            if (auth()->check()) {
                return redirect()->to(config('larawire.redirect_if_authenticated'));
            }
        }

        $this->component = $component;
    }

    public function render()
    {
        $layout = in_array($this->component, config('larawire.auth_components')) ? 'layouts.auth' : 'layouts.app';

        return view('livewire.base.main')
                ->layout($layout, ['component' => $this->component]);
    }

    public function changeComponent($component)
    {
        if (!$compClassName = $this->getClass($component)) {
            // cek sekali lagi dengan asumsi ada class index di dalamnya
            $component .= '.index';
            if (!$compClassName = $this->getClass($component)) {
                abort(404);
            }
        }
        $this->authorizeComponent($compClassName);

        $this->component = $component;
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->to('/auth/login');
    }

    private function getClass($component)
    {
        $arrComp = explode('.', $component);
        $class = config('livewire.class_namespace');
        foreach ($arrComp as $comp) {
            $class .= '\\' . str_replace(' ', '', ucwords(str_replace('-', ' ', $comp)));
        }

        if (class_exists($class)) {
            return $class;
        }

        return false;
    }

    private function authorizeComponent($compClassName)
    {
        $compClass = app($compClassName);

        if (method_exists($compClass, 'needAuthenticated')) {
            $compClass->needAuthenticated();
        }

        if (method_exists($compClass, 'authorizeCheck')) {
            $compClass->authorizeCheck();
        }
    }
}
