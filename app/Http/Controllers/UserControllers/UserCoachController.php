<?php

namespace App\Http\Controllers\UserControllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Users\UserCoachResource;

class UserCoachController extends Controller
{
    public function index()
    {
        $page_heading = 'Coach';
        $sub_page_heading = 'View all coach users';
        $user = new User();
        return view('N10Pages.UserPages.UserCoach.index', compact('page_heading', 'sub_page_heading','user'));
    }

    public function list()
    {
        $users = User::where('user_type', 'coach')->with('userCreator')->get();
        return new UserCoachResource($users);
    }

    public function details(Request $request)
    {
        $user = new User();
        $title="Add Coach";
        if($request->id){
            $title="Edit Coach";
            $user = User::find($request->id);
        }
        return view('N10Pages.UserPages.UserCoach.form', compact('user','title'));
    }

    public function info(Request $request)
    {
        $user = new User();
        if($request->id){
            $title="Edit Admin";
            $user = User::find($request->id);
        }
        return view('N10Pages.UserPages.UserCoach.info', compact('user'));
    }


    public function view(Request $request)
    {
        $user = new User();
        $page_heading = 'Coach';
        $sub_page_heading = 'View all coach users';
        if($request->id){
            $user = User::find($request->id);
        }
        return view('N10Pages.UserPages.UserCoach.view', compact('user','sub_page_heading','page_heading'));
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
        return response()->json(['success' => true, 'msg' => 'User Edit Complete']);

        }
        else{
            request()->validate(User::createRules());
            $newavatar=$this->updateprofile($request,'avatar');
            unset($request['avatar']);

            if($request->password!=null){
                    $password = Hash::make($request->password);
                    unset($request['avatar']);
                    $user = User::create(array_merge($request->all(),['password' => $password,'avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'coach']));
            }
            else{
                    $user = User::create(array_merge($request->all(),['avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'coach']));

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
