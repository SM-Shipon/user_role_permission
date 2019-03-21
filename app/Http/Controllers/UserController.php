<?php

namespace App\Http\Controllers;

use App\Role;
use App\RoleUser;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('user.index',compact('users'));
    }
    public function create(){
        $this->checkpermission('user-create');

        $roles=Role::query()->pluck('name','id');
        return view('user.create',compact('roles'));
    }
    public function store(Request $request){
        $message = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),

        ]);
        RoleUser::create([
            'role_id' => $request->role_id,
            'user_id' => $message->id
        ]);
        return redirect('user-create');
    }
    public function edit($id){
        $this->checkpermission('user-edit');

        $user = User::query()->find($id);
        $roles=Role::query()->pluck('name','id');
        return view('user.edit',compact('user','roles'));
    }

    public function update(Request $request, $id){
        $user = User::query()->find($id);
        $user->update($request->all());
        return redirect('user-manage');
    }
    public function destroy($id){
        $this->checkpermission('user-delete');

        $user = User::query()->findOrFail($id);
        $user->delete();
        return redirect('user-manage');
    }
}
