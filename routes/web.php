<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->group(function() {

    Route::middleware("guest")->group(function() {
        Route::get("login", [LoginController::class, "index"])->name("admin.login");
        Route::post("authenticate", [LoginController::class, "authenticate"])->name("admin.authenticate");
    });

    Route::middleware("auth")->group(function() {
        Route::get("logout", [LoginController::class, "logout"])->name("admin.logout");
        Route::get("dashboard", [DashboardController::class, "index"])->name("admin.dashboard");

        /** Manage Roles */
        Route::prefix("role")->group(function() {
            Route::get("/", [RoleController::class, "index"])->name("admin.role.list");
            Route::get("/{id}", [RoleController::class, "edit"])->name("admin.role.edit");
            Route::post("/{id}", [RoleController::class, "save"])->name("admin.role.update");
        });

        /** Manage Admin */
        Route::get("/", [AdminController::class, "index"])->name("admin.index");
    });


});