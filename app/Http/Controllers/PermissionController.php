<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use App\RolePermission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    public function index(){
        $this->checkpermission('permission-manage');
        $permissions=Permission::all();
        return view('permission.index',compact('permissions'));
    }
    public function create(){
        $this->checkpermission('permission-create');

        return view('permission.create');
    }
    public function store(Request $request){
       Permission::query()->create($request->all());
       return redirect('permission-create');
    }
    public function edit($id){
        $this->checkpermission('permission-edit');

        $permission = Permission::query()->find($id);
        return view('permission.edit',compact('permission'));
    }

    public function update(Request $request, $id){
        $permission = Permission::query()->find($id);
        $permission->update($request->all());
        return redirect('permission-manage');
    }
    public function destroy($id){
        $this->checkpermission('permission-delete');

        $permission = Permission::query()->findOrFail($id);
        $permission->delete();
        return redirect('permission-manage');
    }
    public function assign_permission($id){
        $this->checkpermission('permission-assign');

        $roles = Role::find($id);
        $permissions = Permission::all();
        $currentpermissions = $roles->permissions;
        //dd($currentpermissions);
        return view('permission.assign-permission',compact('permissions','roles','currentpermissions'));
    }

    public function assign_permission_update(Request $request, $id){

    // dd($request->all());

        $data['role_id'] = $id;
        $role = Role::find($id);
        $rp = RolePermission::where('role_id',$id)->get();
        foreach ($rp as $r) {
            $r->delete();
        }
        if (isset($request->asignpermission)) {
            foreach ($request->asignpermission as $p) {
                $data['permission_id'] = $p;
                RolePermission::create($data);
            }
        }

        return redirect('role-manage');
    }


}
