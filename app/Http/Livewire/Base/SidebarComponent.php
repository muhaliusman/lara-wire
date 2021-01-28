<?php

namespace App\Http\Livewire\Base;

use App\Models\Menu;
use Livewire\Component;

class SidebarComponent extends Component
{
    public $menu = [];

    public function render()
    {
        return view('livewire.base.sidebar-component');
    }

    public function mount()
    {
        $this->menu = Menu::orderBy('order_index', 'asc')->get();
    }
}
