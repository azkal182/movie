<?php 

 namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends controller
{
	public function authenticate(Request $request)
	{
		# input yg di ambil
		$credentials = $request->only('email', 'password');
		dd(Auth::attempt($credentials));
		if (Auth::attempt($credentials)) {

			# jika berhasil
			return redirect('berhasil');
		}

		# jika gagal
		return redirect('login');

	}
}