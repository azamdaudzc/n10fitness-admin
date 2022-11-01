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

        $user=User::find($request->id);
        if($user && isset($request->id)){
            $data='<input type="hidden" name="idtoedit" value="'.$user->id.'">';

        }else{
            $user=new User();
            $data='';

        }

        $data+='
            <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(http://localhost:8000/storage/'.$user->avatar.');  background-size: 125px 125px;"></div>
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                    <i class="bi bi-pencil-fill fs-7"></i>
                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                    <input type="hidden" name="avatar_remove">
                </label>
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                </span>
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                    <i class="bi bi-x fs-2"></i>
                </span>
            </div>

            <div class="mb-10">
                <label for="first_name" class="form-label">First Name</label>
                <input class="form-control" placeholder="First Name" name="first_name" type="text" id="first_name" value="'.$user->first_name.'">
            </div>

            <div class="mb-10">
                <label for="last_name" class="form-label">Last Name</label>
                <input class="form-control" placeholder="Last Name" name="last_name" type="text" id="last_name" value="'.$user->last_name.'">
            </div>

            <div class="mb-10">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" placeholder="Email" name="email" type="text" id="email" value="'.$user->email.'">
            </div>

            <div class="mb-10">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" placeholder="password" name="password" type="text" value="" id="password">
            </div>

            <div class="mb-10">
                <label for="phone" class="form-label">Phone</label>
                <input class="form-control" placeholder="Phone" name="phone" type="text" id="phone" value="'.$user->phone.'">
            </div>

            <input type="hidden" name="user_type" value="">
            <input type="hidden" name="is_active" value="1">
            <input type="hidden" name="area" value="a">

            <div class="error-area"></div>
            <div class="box-footer mt20">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    ';
    return $data;
    }

    public function store(Request $request)
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
