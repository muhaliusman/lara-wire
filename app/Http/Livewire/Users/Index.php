<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $title = 'List User';

    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::latest()->paginate(10),
        ]);
    }

    public function paginationView()
    {
        return 'components.utils.pagination';
    }
}
