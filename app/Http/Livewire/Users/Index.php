<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $title = 'List User';
    public $perPage = 5;
    public $search;
    public $middleware = [
        'auth'
    ];

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
