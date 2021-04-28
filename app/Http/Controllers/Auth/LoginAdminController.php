<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginAdminController extends Controller
{
    public function authenticate(Request $request)
    {
        #dd('azkal');

        $credentials = $request->only('email', 'password');
		if (Auth::attempt($credentials)) {
			if (Auth()->user()->role == 1) {
				return redirect()->route('admin.dashboard');
			}

			return redirect()->route('login.admin')
				->with('error', 'Email-Address And Password Are Wrong.');
			
		}

		# jika gagal
		return redirect()->route('login.admin')
				->with('error', 'Email-Address And Password Are Wrong.');
    }
}
