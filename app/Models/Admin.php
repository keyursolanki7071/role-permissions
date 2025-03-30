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
}
