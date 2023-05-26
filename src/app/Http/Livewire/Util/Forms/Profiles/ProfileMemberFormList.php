<?php

namespace App\Http\Livewire\Util\Forms\Profiles;

use App\Models\User;
use Livewire\Component;

class ProfileMemberFormList extends Component
{
    public mixed $users;
    public $userId;
    public $userName;

    public function mount()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.util.forms.profiles.profile-member-form-list');
    }
}
