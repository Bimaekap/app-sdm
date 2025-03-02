<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // ? check who want to login
            if (Auth::user()->role == 'superadmin') {
                return redirect()->route('dashboard.superadmin');
            }
            if (Auth::user()->role == 'admin') {
                dd('admin');
            }
            if (Auth::user()->role == 'staff') {
                dd('staff');
            }
            if (Auth::user()->role == 'dosen') {
                dd('dosen');
            }
        } else {
            return back()->with('login', 'Email Dan Password salah');
        }
        dd('gagal login');
        return redirect()->route('dashboard')->with('message', 'berhasil login');
    }
}
