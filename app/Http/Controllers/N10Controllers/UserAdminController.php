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

    public function details(Request $request)
    {
        $user = new User();
        if($request->id){
            $user = User::find($request->id);
        }
        return view('n10pages.UserAdmin.form', compact('user'));
    }

    public function form(Request $request)
    {

    }

    public function store(Request $request)
    {
        if(isset($request->id)){
            request()->validate(User::$editrules);
            $user=User::find($request->id);
        if($request->password!=null){
            $password = Hash::make($request->password);
            if($request->hasFile('avatar')){
                $newavatar=$this->updateprofile($request,'avatar');
                unset($request['avatar']);
                $user->update(array_merge($request->all(),['password' => $password,'avatar' => $newavatar]));
            }
            else{
                $user->update(array_merge($request->all(),['password' => $password]));
            }
        }
        else{
        unset($request['password']);
        if($request->hasFile('avatar')){
            $newavatar=$this->updateprofile($request,'avatar');
            unset($request['avatar']);
            $user->update(array_merge($request->all(),['avatar' => $newavatar]));
        }
        else{
            $user->update(array_merge($request->all()));
        }
        }
        }
        else{
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
        }

        return $request->user_type;
    }

    public function delete(Request $request)
    {

    }
}
