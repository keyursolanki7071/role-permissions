<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = "admins";

    public $fillable = [
        "name",
        "email",
        "password",
        "role_id",
        "status",
    ];
}
