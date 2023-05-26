<?php

namespace App\Http\Livewire\Listas\Users;

use App\Http\Livewire\Base\PaginatedComponent;
use App\Models\Constantes\Perfil;
use App\Models\External\PRIMAVERA\Profissao;
use App\Models\Roles;
use App\Models\Traits\SearchRoleValidated;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;


class UserList extends PaginatedComponent
{

    use SearchRoleValidated;

    public  $roles = array();

    public function mount()
    {
        $this->roles = Roles::all();
    }



    public function render()
    {

        if (STR::length($this->termoPesquisa)>2)
            $utilizadores = User::search($this->termoPesquisa)->paginate(15);
        else
            $utilizadores = User::latest()->paginate(15);

        return view('livewire.listas.users.user-list',['utilizadores'=>$utilizadores,'roles'=>$this->roles]);
    }

    public function impersonate(User $user): void
    {
        Auth::user()->impersonate($user);
        $this->redirect(route('home'));
    }

    public function leaveImpersonateUser()
    {
        Auth::user()->leaveImpersonation();
        return redirect()->back();
    }


}
