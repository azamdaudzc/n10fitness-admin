<?php

namespace App\Http\Controllers\N10Controllers;

use App\Models\User;
use App\Models\AthleticType;
use Illuminate\Http\Request;
use App\Models\UserPermission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $data = $this->getUserIndexData('all','Client','all');
        return view('n10pages.user.index')->with($data);
    }

    public function indexAdmin()
    {
        $data = $this->getUserIndexData('admin','Client','admin');
        return view('n10pages.user.index')->with($data);
    }
    public function indexUsers()
    {

        $data = $this->getUserIndexData('client','Client','client');
        return view('n10pages.user.index')->with($data);
    }
    public function indexCoaches()
    {
        $data = $this->getUserIndexData('coach','Coaches','coach');
        return view('n10pages.user.index')->with($data);
    }

    function getUserIndexData($type,$heading,$what){
        $data['user_type']=$type;
        $data['page_heading']=$heading;
        $data['sub_page_heading']='all coaches';
        if($what=='coach'){
            $data['users'] = User::where('user_type','=','coach')->with('userCreator')->get();
        }
        else if($what=='admin'){
            $data['users'] = User::where('user_type','=','admin')->with('userCreator')->get();
        }
        else if($what=='client'){
            $data['users'] = User::where('user_type','=','user')->with('userCreator')->get();
        }
        else{
            $data['users'] = User::with('userCreator')->get();
        }
        $data['user'] = new User();
        $data['athleticTypes']=AthleticType::all();
        $data['formRoute']=route('users.store');
        $data['type']='POST';
        return $data;
    }
    public function getInfo(Request $request)
    {
        $data['exerciseCategory'] = User::where('id',$request->id)->with('userCreator')->get()->first();
        $data['permissions']=UserPermission::where('user_id',$request->id)->get();
        return $data;
    }


    public function create()
    {
        $user = new User();
        $page_heading='Create User';
        $sub_page_heading='create new user';
        return view('n10pages.user.create', compact('user','page_heading','sub_page_heading'));
    }


    public function updateprofile(Request $request,$file)
    {
        $p = $request->input();
        $path ='';

        if ($request->file($file)) {
            $request->validate([
                $file => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imagePath = $request->file($file);
            $imageName = $imagePath->getClientOriginalName();
            $path = $request->file($file)->storeAs('public/profileimage', time().$imageName);
            $path=str_replace('public/','',$path);
        }
       return $path;
    }

    public function store(Request $request)
    {
        request()->validate(User::$rules);
        $newavatar=$this->updateprofile($request,'avatar');
        unset($request['avatar']);

        if($request->password!=null){
                $password = Hash::make($request->password);
                unset($request['avatar']);
                $user = User::create(array_merge($request->all(),['password' => $password,'avatar' => $newavatar,'created_by' => Auth::user()->id]));
        }
        else{
                $user = User::create(array_merge($request->all(),['avatar' => $newavatar,'created_by' => Auth::user()->id]));

        }
        $nutrition_deployment=UserPermission::where('user_id',$user->id)->where('name','nutrition_deployment')->get();
        $program_deployment=UserPermission::where('user_id',$user->id)->where('name','program_deployment')->get();
        $pdf_deployments=UserPermission::where('user_id',$user->id)->where('name','pdf_deployments')->get();
        if($request->has('nutrition_deployment')){
            if($nutrition_deployment->count()>0){}
            else{
                $data=[
                    'user_id' => $user->id,
                    'name' => 'nutrition_deployment',
                ];
                UserPermission::create($data);
            }
        }
        else{
            if($nutrition_deployment->count()>0){
                UserPermission::where('user_id',$user->id)->where('name','nutrition_deployment')->delete();
            }
        }
        if($request->has('program_deployment')){
            if($program_deployment->count()>0){}
            else{
                $data=[
                    'user_id' => $user->id,
                    'name' => 'program_deployment',
                ];
                UserPermission::create($data);
            }
        }
        else{
            if($program_deployment->count()>0){
                UserPermission::where('user_id',$user->id)->where('name','program_deployment')->delete();
            }
        }
        if($request->has('pdf_deployments')){
            if($pdf_deployments->count()>0){}
            else{
                $data=[
                    'user_id' => $user->id,
                    'name' => 'pdf_deployments',
                ];
                UserPermission::create($data);
            }
        }
        else{
            if($pdf_deployments->count()>0){
                UserPermission::where('user_id',$user->id)->where('name','pdf_deployments')->delete();
            }
        }
        return $request->user_type;
    }


    public function show($id)
    {
        $user = User::find($id);
        return view('n10pages.user.show', compact('user'));
    }


    public function edit($id)
    {
        $page_heading='Edit User';
        $sub_page_heading='edit user';
        $user = User::find($id);
        $athleticTypes=AthleticType::all();
        $formRoute=route('users.update',$id);
        $type='POST';
        $nutrition_deployment=UserPermission::where('user_id',$id)->where('name','nutrition_deployment')->get();
        $program_deployment=UserPermission::where('user_id',$id)->where('name','program_deployment')->get();
        $pdf_deployments=UserPermission::where('user_id',$id)->where('name','pdf_deployments')->get();
        $nutrition_deployment_checked=0;
        $program_deployment_checked=0;
        $pdf_deployments_checked=0;
        if( $nutrition_deployment->count()>0){

            $nutrition_deployment_checked=1;
        }
        if( $program_deployment->count()>0){
            $program_deployment_checked=1;
        }
        if( $pdf_deployments->count()>0){
            $pdf_deployments_checked=1;
        }

        return view('n10pages.user.edit', compact('user','athleticTypes','formRoute','type','page_heading','sub_page_heading','nutrition_deployment_checked','program_deployment_checked','pdf_deployments_checked'));
    }

    public function update(Request $request, User $user)
    {
        request()->validate(User::$editrules);

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
        $nutrition_deployment=UserPermission::where('user_id',$user->id)->where('name','nutrition_deployment')->get();
        $program_deployment=UserPermission::where('user_id',$user->id)->where('name','program_deployment')->get();
        $pdf_deployments=UserPermission::where('user_id',$user->id)->where('name','pdf_deployments')->get();
        if($request->has('nutrition_deployment')){
            if($nutrition_deployment->count()>0){}
            else{
                $data=[
                    'user_id' => $user->id,
                    'name' => 'nutrition_deployment',
                ];
                UserPermission::create($data);
            }
        }
        else{
            if($nutrition_deployment->count()>0){
                UserPermission::where('user_id',$user->id)->where('name','nutrition_deployment')->delete();
            }
        }
        if($request->has('program_deployment')){
            if($program_deployment->count()>0){}
            else{
                $data=[
                    'user_id' => $user->id,
                    'name' => 'program_deployment',
                ];
                UserPermission::create($data);
            }
        }
        else{
            if($program_deployment->count()>0){
                UserPermission::where('user_id',$user->id)->where('name','program_deployment')->delete();
            }
        }
        if($request->has('pdf_deployments')){
            if($pdf_deployments->count()>0){}
            else{
                $data=[
                    'user_id' => $user->id,
                    'name' => 'pdf_deployments',
                ];
                UserPermission::create($data);
            }
        }
        else{
            if($pdf_deployments->count()>0){
                UserPermission::where('user_id',$user->id)->where('name','pdf_deployments')->delete();
            }
        }
        return $request->user_type;
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return "done";
    }
}
