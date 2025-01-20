<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function pageuser()
    {
        return view('superadmin.contents.users-management.page-user');
    }
}
