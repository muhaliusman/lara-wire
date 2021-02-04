<?php

namespace App\Http\Livewire\Permissions;

use App\Models\Permission;
use App\Traits\AuthorizeComponent;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, AuthorizeComponent;

    public $title = 'List Permission';
    public $perPage = 5;
    public $search;
    public $selectedId;

    protected $auth = true;
    protected $permissions = [
        'permission.index'
    ];
    protected $queryString = ['search'];

    public function render()
    {
        // $this->dispatchBrowserEvent('close-modal');
        return view('livewire.permissions.index', [
            'permissions' => Permission::where('name', 'like', '%'.$this->search.'%')
                ->latest()
                ->paginate($this->perPage)
                ->onEachSide(1),
        ]);
    }

    public function selectId($id)
    {
        $this->selectedId = $id;
    }

    public function delete()
    {
        $this->authorizeCheck('permission.delete');
        Permission::destroy($this->selectedId);

        $this->dispatchBrowserEvent('close-modal');
        $this->emit('successAction', 'Data deleted successfully !', 'permissions.index');
    }

    public function paginationView()
    {
        return 'components.other.pagination';
    }

    public function edit($id)
    {
        $this->emit('changeComponent', 'permissions.edit');
        $this->emit('getPermission', $id);
    }
}
