<?php

namespace App\Http\Controllers\N10Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserAdminResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index()
    {
        $page_heading = 'Admins';
        $sub_page_heading = 'View all admin users';
        return view('n10pages.UserAdmin.index', compact('page_heading', 'sub_page_heading'));
    }

    public function list()
    {
        $users = User::where('user_type', 'admin')->get();
        return new UserAdminResource($users);
    }

    public function details()
    {

    }

    public function form(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }
}
