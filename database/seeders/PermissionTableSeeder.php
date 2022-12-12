<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            ['name' => "Manage Projects", 'guard_name' => "web"],
            ['name' => "Manage Events", 'guard_name' => "web"],
            ['name' => "Manage Service Types", 'guard_name' => "web"],
            ['name' => "Manage Project Types", 'guard_name' => "web"],
            ['name' => "Manage Services", 'guard_name' => "web"],
            ['name' => "Manage Users", 'guard_name' => "web"],
            ['name' => "Manage Permissions", 'guard_name' => "web"],
            ['name' => "Manage Team", 'guard_name' => "web"],
            ['name' => "View Inquiries", 'guard_name' => "web"],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
