<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
class LoginScreen extends Component
{
    //these public variables are visible and accessible from the frontend
    public $lvEmail;
    public $lvPassword;

    public function doLogin()
    {
        $this->validate([
            'lvEmail' => 'required|email',
            'lvPassword' => 'required|min:4'
        ]);

        if(Auth::attempt([
        'email' => $this->lvEmail,
        'password' => $this->lvPassword]))
    {
        return redirect('/home');
    }else{
            session()->flash('message','Invalid login!');
        }

    }



    public function render()
    {
        return view('livewire.login-screen');
    }
}
