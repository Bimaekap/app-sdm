<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {
        dd($request->all);
        $request->validate();

        return redirect()->route('dashboard')->with('message', 'berhasil login');
    }
}
