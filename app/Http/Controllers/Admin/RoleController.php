<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
