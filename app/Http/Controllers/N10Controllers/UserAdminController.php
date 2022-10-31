<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserAdminResource;

class UserAdminController extends Controller
{
    public function index()
    {
        $page_heading = 'Admins';
        $sub_page_heading = 'View all admin users';
        $user = new User();
        return view('n10pages.UserAdmin.index', compact('page_heading', 'sub_page_heading','user'));
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

        request()->validate(User::$rules);
        $newavatar=$this->updateprofile($request,'avatar');
        unset($request['avatar']);

        if($request->password!=null){
                $password = Hash::make($request->password);
                unset($request['avatar']);
                $user = User::create(array_merge($request->all(),['password' => $password,'avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'admin']));
        }
        else{
                $user = User::create(array_merge($request->all(),['avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'admin']));

        }

        return $request->user_type;
    }

    public function delete(Request $request)
    {

    }
}
