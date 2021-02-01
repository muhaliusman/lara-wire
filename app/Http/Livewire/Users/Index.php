<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use App\Traits\AuthorizeComponent;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, AuthorizeComponent;

    public $title = 'List User';
    public $perPage = 5;
    public $search;

    protected $auth = true;
    protected $queryString = ['search'];

    public function render()
    {
        return view('livewire.users.index', [
            'users' => User::where('name', 'like', '%'.$this->search.'%')
                ->orWhere('email', 'like', '%'.$this->search.'%')
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
