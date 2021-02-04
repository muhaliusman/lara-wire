<?php

namespace App\Http\Livewire\Permissions;

use App\Models\Permission;
use Livewire\Component;

class Create extends Component
{
    public $title = "Create Permission";
    public $name, $guard_name;

    protected $rules = [
        'name' => 'required|max:191|unique:permissions,name',
        'guard_name' => 'required|in:web,api',
    ];

    public function render()
    {
        return view('livewire.permissions.create');
    }

    public function submit()
    {
        $this->validate();

        $permission = new Permission();
        $permission->name = $this->name;
        $permission->guard_name = $this->guard_name;
        $permission->save();

        $this->emit('successAction', 'Data saved successfully !', 'permissions.index');
        $this->emit('changeComponent', 'permissions.index');
    }
}
