<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
       $roles=Role::all();
        return view('role.index',compact('roles'));
    }
    public function create(){
        $this->checkpermission('role-create');

        return view('role.create');
    }
    public function store(Request $request){
        Role::query()->create($request->all());
        return redirect('role-create');
    }
    public function edit($id){
        $this->checkpermission('role-edit');

        $role= Role::find($id);
        return view('role.edit',compact('role'));
    }
    public function update(Request $request,$id){
        $role= Role::find($id);
        $role->update($request->all());
        return redirect('role-manage');

    }
    public function destroy($id){
       $check= $this->checkpermission('role-delete');
        if($check == null){
          $role= Role::query()->findOrFail($id);
          $role->delete();
          return redirect('role-manage');
      }


    }
}
