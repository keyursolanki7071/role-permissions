<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permissions;
use App\Models\Role;
use Exception;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {
        try {

            $roles = Role::all();
            return view("admin.role.index", [
                "roles" =>  $roles
            ]);

        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    public function edit(Request $request) {
        try {

            $id = $request->id;
            if(empty($id)) {
                throw new Exception("Resource data invalid.");
            }
            $role = Role::with("permissions")->where("id", $id)->first();
            if(empty($role)) {
                throw new Exception("Resource data invalid.");
            }
            $permissions = Permissions::all();
            $rolePermissions = $role->permissions->pluck("id")->toArray();
            return view("admin.role.form", [
                "role"  =>  $role,
                "permissions"   =>  $permissions,
                "rolePermissions" => $rolePermissions
            ]);

        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    public function save(Request $request) {
        try {

            $role = Role::find($request->id);
            $data = $request->all();

            $role->name = $data["name"];
            $role->is_super_admin = isset($data["is_super_admin"]) && $data["is_super_admin"] ? Role::STATUS_YES : Role::STATUS_NO;
            if(!empty($data['permissions'])) {
                $role->permissions()->sync($data['permissions']);
            }

            return redirect(route("admin.role.list"));
            
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
