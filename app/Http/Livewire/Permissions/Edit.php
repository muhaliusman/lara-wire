<?php

namespace App\Http\Livewire\Permissions;

use App\Models\Permission;
use Livewire\Component;

class Edit extends Component
{
    public $title = "Edit Permission";
    public $permission;

    protected $listeners = ['getPermission'];

    protected $rules = [
        'permission.*.name' => 'required|max:191|unique:permission,name,',
        'permission.*.guard_name' => 'required|in:web,api',
    ];

    public function render()
    {
        return view('livewire.permissions.edit');
    }

    public function getPermission($id)
    {
        $this->permission = Permission::findOrFail($id);
    }
}
