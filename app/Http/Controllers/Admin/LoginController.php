<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        echo phpinfo();
        return view('pages.admin.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Gunakan email yang valid',
                'password.required' => 'Password tidak boleh kosong'
            ]
        );

        if($validator->fails()){
            return redirect()->route('admin.auth.show-login-form')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->safe()->only(['email', 'password']);

        if(Auth::guard('admin')->attempt($validated, $request->has('remember'))) {
           $request->session()->regenerate();

           return redirect()->route('admin.dashboard');
        }

        return redirect()->route('admin.auth.show-login-form')
            ->with('error', 'User tidak ditemukan');
    }

    public function logout()
    {
    }
}
