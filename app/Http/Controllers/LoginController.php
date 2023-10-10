<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginController extends Controller  implements LoginResponseContract
{
    //

    public function toResponse($request)
    {
        $home = auth()->user()->role === "admin" ? '/repair' : '/dashboard';

        return redirect()->intended($home);
    }
}
