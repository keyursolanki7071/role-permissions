<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        try {

            $admins = Admin::all();

            return view("admin.admin.index", [
                "admins"    =>  $admins
            ]);

        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
