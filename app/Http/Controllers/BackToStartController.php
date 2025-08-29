<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class BackToStartController extends Controller
{
    public function redirect(): RedirectResponse
    {
        $url = Session::get('after_login_url', '/');

        return redirect($url);
    }
}
