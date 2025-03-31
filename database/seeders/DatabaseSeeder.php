<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Permissions;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = Role::create([
            "name"  =>  "Super Admin",
            "is_super_admin"    =>  Role::STATUS_YES
        ]);

        Admin::create(
            [
                "name"  =>  "Admin",
                "email" =>  "admin@gmail.com",
                "password"  =>  Hash::make("Test@1234"),
                "role_id"   =>  $role->id
            ]
        );
        $permissions = [
            [
                "name"  =>  "Create Admin",
                "key"   =>  "create_admin",
                "created_at"    =>  now(),
                "updated_at"    =>  now()
            ],
            [
                "name"  =>  "Edit Admin",
                "key"   =>  "edit_admin",
                "created_at"    =>  now(),
                "updated_at"    =>  now()
            ],
            [
                "name"  =>  "Dashboard",
                "key"   =>  "dashboard",
                "created_at"    =>  now(),
                "updated_at"    =>  now()
            ],
            [
                "name"  =>  "Create Role",
                "key"   =>  "create_role",
                "created_at"    =>  now(),
                "updated_at"    =>  now()
            ]
        ];

        Permissions::insert($permissions);
    }
}
