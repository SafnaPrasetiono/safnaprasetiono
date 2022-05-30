<?php

namespace App\Http\Livewire\Auth;

use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginAdmin extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email|max:100',
        'password' => 'required|min:10',
    ];
    protected $messages = [
        'email.required' => 'setidaknya masukan email',
        'email.min' => 'sepertnya bukan alamat email',
        'email.email' => 'sepertnya bukan alamat email',
        'email.unique' => 'alamat email ini sudah aktif',
        'email.max' => 'alamat email kamu terlalu panjang',

        'password.required' => 'setidaknya masukan password',
        'password.min' => 'Oops password anda telalu pendek',
    ];
    protected $validationAttributes = [
        'email' => 'email address'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function clrInput()
    {
        $this->email = '';
        $this->password = '';
    }

    public function submit()
    {
        $this->validate();
        $data = admin::where('email', $this->email)->first();
        if ($data) {
            if (Hash::check($this->password, $data->password)) {
                Auth::guard('admin')->login($data);
                return redirect()->route('admin.dashboard');
            } else {
                $this->dispatchBrowserEvent('error', 'Password akun anda salah!');
                $this->clrInput();
            }
        } else {
            $this->dispatchBrowserEvent('error', 'Email anda tidak terdaftar!');
            $this->clrInput();
        }
    }


    public function render()
    {
        return view('livewire.auth.login-admin');
    }
}
