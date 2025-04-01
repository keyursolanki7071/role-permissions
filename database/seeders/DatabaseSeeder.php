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
        
        $roleSuperAdmin = Role::create([
            "name"  =>  "Super Admin",
            "is_super_admin"    =>  Role::STATUS_YES
        ]);

        $roleManager = Role::create([
            "name"  =>  "Manager",
            "is_super_admin"    =>  Role::STATUS_NO
        ]);

        Admin::create(
            [
                "name"  =>  "Admin",
                "email" =>  "admin@gmail.com",
                "password"  =>  Hash::make("Test@1234"),
                "role_id"   =>  $roleSuperAdmin->id
            ]
        );

        Admin::create(
            [
                "name"  =>  "Manager Admin",
                "email" =>  "manager@admin.com",
                "password"  =>  Hash::make("Test@1234"),
                "role_id"   =>  $roleManager->id
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
