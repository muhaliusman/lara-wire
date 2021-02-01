<?php

namespace App\Http\Livewire\Base;

use App\Models\Menu;
use Livewire\Component;

class Sidebar extends Component
{
    public function render()
    {
        $permissions = [];
        if (auth()->check()) {
            $permissions = auth()->user()
                ->getAllPermissions()
                ->pluck('id')
                ->toArray();

            $menu = Menu::orderBy('order_index', 'asc')
                ->whereIn('permission_id', $permissions)
                ->get();
        }
        return view('livewire.base.sidebar', ['menu' => $menu]);
    }
}
