<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Admin extends User
{
    protected $table = "admins";

    protected $hidden = ["password"];

    public $fillable = [
        "name",
        "email",
        "password",
        "role_id",
        "status",
    ];

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function isSuperAdmin() {
        return $this->role->is_super_admin == Role::STATUS_YES ? true : false;
    }

    public function hasPermission($permission) {
        if($this->isSuperAdmin()) {
            return true;
        }
       
        return $this->role()->whereHas("permissions", function($query) use ($permission) {
            $query->where("key", $permission);
        })->exists();
    }
}
