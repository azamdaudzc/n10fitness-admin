<?php

namespace App\Http\Controllers\UserControllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Users\UserCoachResource;
use App\Http\Resources\Users\CoachClientResource;
use App\Models\ClientCoach;
use App\Models\UserPermission;

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

    public function assigedclients(Request $request){
        $users = ClientCoach::where('coach_id', $request->id)->with('user')->get();
        return new CoachClientResource($users);
    }

    public function details(Request $request)
    {
        $user = new User();
        $title="Add Coach";
        if($request->id){
            $title="Edit Coach";
            $user = User::find($request->id);
        }
        $nutrition_permission=UserPermission::where('user_id',$request->id)->where('name','Nutrition Deployment')->exists();
        $program_permission=UserPermission::where('user_id',$request->id)->where('name','Program Deployment')->exists();
        $pdf_permission=UserPermission::where('user_id',$request->id)->where('name','PDF Deployment')->exists();
        return view('N10Pages.UserPages.UserCoach.form', compact('user','title','nutrition_permission','program_permission','pdf_permission'));
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


    public function view($id)
    {

        $user = new User();
        $page_heading = 'Coach';
        $sub_page_heading = 'View coach user';
        if($id){
            $user = User::find($id);
        }
        $all_users=User::where('user_type','user')->get();
        return view('N10Pages.UserPages.UserCoach.view', compact('user','sub_page_heading','page_heading','all_users'
        ));
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
        $this->store_permissions($request, $request->id);
        return response()->json(['success' => true, 'msg' => 'User Edit Complete']);

        }
        else{
            request()->validate(User::createRules());
            $newavatar=$this->updateprofile($request,'avatar');
            unset($request['avatar']);
            $user=null;
            if($request->avatar_remove==1){
                $newavatar=null;
            }
            if($request->password!=null){
                    $password = Hash::make($request->password);
                    unset($request['avatar']);
                    $user = User::create(array_merge($request->all(),['password' => $password,'avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'coach']));
            }
            else{
                    $user = User::create(array_merge($request->all(),['avatar' => $newavatar,'created_by' => Auth::user()->id,'user_type' => 'coach']));

            }
            $this->store_permissions($request, $user->id);

            return response()->json(['success' => true, 'msg' => 'User Created']);

        }

        return response()->json(['success' => false, 'msg' => 'Some Error']);

    }


    public function delete(Request $request)
    {
        $user = User::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'User Deleted']);
    }

    public function permissions(Request $request){
        $this->store_permissions($request, $request->user_id);
    }
    public function store_permissions(Request $request,$user_id){

        if(isset($request->nutrition_permission)){
            $there=UserPermission::where('user_id',$user_id)->where('name','Nutrition Deployment')->exists();
            if(!$there){
                UserPermission::create(['user_id' => $user_id,
                 'name' => 'Nutrition Deployment'] );
            }
        }
        else{
            UserPermission::where('user_id',$user_id)->where('name','Nutrition Deployment')->delete();
        }
        if(isset($request->program_permission)){
            $there=UserPermission::where('user_id',$user_id)->where('name','Program Deployment')->exists();
            if(!$there){
                UserPermission::create(['user_id' => $user_id,
                 'name' => 'Program Deployment'] );
            }
        }
        else{
            UserPermission::where('user_id',$user_id)->where('name','Program Deployment')->delete();
        }
        if(isset($request->pdf_permission)){
            $there=UserPermission::where('user_id',$user_id)->where('name','PDF Deployment')->exists();
            if(!$there){
                UserPermission::create(['user_id' => $user_id,
                 'name' => 'PDF Deployment'] );
            }
        }
        else{
            UserPermission::where('user_id',$user_id)->where('name','PDF Deployment')->delete();
        }
        return response()->json(['success' => true, 'msg' => 'Permissions Updated']);

    }

    public function attachclient(Request $request){
        $coach_id=$request->coach_id;
        $client_id=$request->client_id;
        if(!ClientCoach::where('client_id',$client_id)->where('coach_id',$coach_id)->exists()){
        ClientCoach::create([
            'assigned_by' => Auth::user()->id,
            'client_id' => $client_id,
            'coach_id' => $coach_id
        ]);
        return response()->json(['success' => true, 'msg' => 'User Assigned']);
    }
    else{
        return response()->json(['success' => true, 'msg' => 'User Already Assigned']);

    }
    }

    public function deleteclient(Request $request){
        $user = ClientCoach::find($request->id)->delete();
        return response()->json(['success' => true, 'msg' => 'User Removed']);
    }
}
