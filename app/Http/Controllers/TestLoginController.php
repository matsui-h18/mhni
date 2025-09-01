<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TestLoginController extends Controller
{

    public function show()
    {
        return view('test-login');
    }
    
    public function login(Request $request)
    {
        $empId = $request->input('emp_id');

        $user = \App\Models\User::where('emp_id', $empId)->first();

        if (!$user) {
            return redirect()->route('test.login.form')->with('error', 'ユーザーが見つかりません');
        }

        Auth::login($user);

        return redirect()->route($user->dep_id === 2 ? 'support' : 'dashboard');
    }
}
