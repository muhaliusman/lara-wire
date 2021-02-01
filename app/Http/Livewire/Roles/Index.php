<?php

namespace App\Http\Livewire\Roles;

use App\Models\Role;
use App\Traits\AuthorizeComponent;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, AuthorizeComponent;

    public $title = 'List Roles';
    public $perPage = 5;
    public $search;

    protected $auth = true;
    protected $permissions = [
        'role.index'
    ];
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.roles.index', [
            'roles' => Role::where('name', 'like', '%'.$this->search.'%')
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
