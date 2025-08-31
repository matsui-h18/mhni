<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserAddLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('management.user_add_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'emp_id' => ['required', 'integer'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['emp_id' => $credentials['emp_id'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            if (Auth::user()->dep_id === 2) {
                return redirect()->route('management.users.index');
            } else {
                Auth::logout();
                return redirect()->route('user.add.login')->withErrors([
                    'emp_id' => '一般社員はこの操作は許可されていません。',
                ]);
            }
        }

        return back()->withErrors([
            'emp_id' => '認証に失敗しました。',
        ]);
    }
}
