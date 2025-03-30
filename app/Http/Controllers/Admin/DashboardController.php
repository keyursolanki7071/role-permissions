<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        try {

            return view("admin.dashboard.index");

        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
