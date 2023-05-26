<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    protected $messages = [
        'email.required' => 'Deve introduzir um email.',
        'email.email' => 'Deve introduzir um email válido.',
        'password.required' => 'Deve introduzir uma palavra passe.',
    ];

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function updatedemail()
    {
        $this->validateOnly('email');
    }
    public function updatedpassword()
    {
        $this->validateOnly('password');
    }

    public function loginUser()
    {
        Session::pull('error');
        $this->validate();
        $credentials = [
            'email'=>$this->email,
            'password'=>$this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }
        $this->password = '';
        Session::put('error','Não foi possível efetuar login');
    }

    public function logoutUser() {

        Auth::logout();

        return redirect('login');
    }
}
