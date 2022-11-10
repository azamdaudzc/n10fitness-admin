<?php

namespace App\Http\Controllers\UserControllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Users\UserAdminResource;

class UserAdminController extends Controller
{
    public function index()
    {
        $page_heading = 'Admins';
        $sub_page_heading = collect(['User', 'Admins']);
        $user = new User();
        return view('N10Pages.UserPages.UserAdmin.index', compact('page_heading', 'sub_page_heading','user'));
    }

    public function list()
    {
        $users = User::where('user_type', 'admin')->with('userCreator')->get();
        return new UserAdminResource($users);
    }

    public function details(Request $request)
    {
        $user = new User();
        $title="Add Admin";
        if($request->id){
            $title="Edit Admin";
            $user = User::find($request->id);
        }
        return view('N10Pages.UserPages.UserAdmin.form', compact('user','title'));
    }

    public function info(Request $request)
    {
        $user = new User();
        if($request->id){
            $title="Edit Admin";
            $user = User::find($request->id);
        }
        return view('N10Pages.UserPages.UserAdmin.info', compact('user'));
    }

    public function view($id)
    {
        $user = new User();
        $page_heading = 'Admins';
        $sub_page_heading = collect(['User', 'Admins']);
        if($id){
            $user = User::find($id);
        }
        return view('N10Pages.UserPages.UserAdmin.view', compact('user','page_heading','sub_page_heading'));
    }

    public function profile()
    {
        $id=Auth::user()->id;
        $user = new User();
        $page_heading = 'Profile';
        $sub_page_heading = collect(['User', 'Admins']);
        if($id){
            $user = User::find($id);
        }
        return view('N10Pages.UserPages.UserAdmin.view', compact('user','page_heading','sub_page_heading'));
    }

    public function store(Request $request)
    {

        if(isset($request->id)){
            request()->validate(User::editRules($request->id));
            $user=User::find($request->id);
        if($request->password!=null){
            $password = Hash::make($request->password);
            if($request->hasFile('avatar')){
                $newavatar=$this->updateprofile($request,'avatar');
                unset($request['avatar']);
                $user->update(array_merge($request->all(),['password' => $password,'avatar' => $newavatar]));
            }
            else if($request->avatar_remove==1){
                $user->update(array_merge($request->all(),['password' => $password,'avatar' => null]));
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
        else if($request->avatar_remove==1){
            $user->update(array_merge($request->all(),['avatar' => null]));
        }
        else{
            $user->update(array_merge($request->all()));
        }
        }
        return response()->json(['success' => true, 'msg' => 'User Edit Complete']);

        }
        else{
            request()->validate(User::createRules());
            $newavatar=$this->updateprofile($request,'avatar');
            unset($request['avatar']);
            if($request->avatar_remove==1){
                $newavatar=null;
            }
            if($request->password!=null){
                    $password = Hash::make($request->password);
                    unset($request['avatar']);
                    $user = User::create(array_merge($request->all(),['password' => $password,'avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'admin']));
            }

            else{
                    $user = User::create(array_merge($request->all(),['avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'admin']));

            }
            return response()->json(['success' => true, 'msg' => 'User Created']);

        }

        return response()->json(['success' => false, 'msg' => 'Some Error']);

    }


    public function delete(Request $request)
    {
        $user = User::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'User Deleted']);
    }
}
