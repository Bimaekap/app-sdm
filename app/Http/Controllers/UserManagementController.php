<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\CreateUserRequest;

class UserManagementController extends Controller
{
    public function pageuser()
    {
        return view('superadmin.contents.users-management.page-user');
    }

    public function create(CreateUserRequest $request): RedirectResponse
    {
        $credentials = $request->validated();

        User::create($credentials);
        return redirect()->route('page.user')->with('messages', 'User Berhasil Di Simpan');
    }
}
