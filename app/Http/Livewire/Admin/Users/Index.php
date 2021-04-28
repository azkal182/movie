<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Index extends Component
{
    public $name, $email, $password, $confirm_password, $role;
    public $modal = false;
    public function render()
    {
    	$user = User::all();
    	
        return view('livewire.admin.users.index',[
        	'users' => $user,
        ]);
    }

    public function save()
    {
        if ($this->password == $this->confirm_password) {
            $store = user::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' =>Hash::make($this->password),
                'role' => $this->role,

            ]);
            return $this->modal = false;

        };
    	
    }

    public function showmodal() 
    {
        return $this->modal = true;
    }
}
