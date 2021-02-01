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

    protected $auth = true;
    protected $permissions = [
        'permission.index'
    ];
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.permissions.index', [
            'permissions' => Permission::where('name', 'like', '%'.$this->search.'%')
                ->latest()
                ->paginate($this->perPage)
                ->onEachSide(1),
        ]);
    }

    public function paginationView()
    {
        return 'components.other.pagination';
    }
}
