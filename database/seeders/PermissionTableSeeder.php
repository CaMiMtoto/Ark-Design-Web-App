<?php

namespace Database\Seeders;

use App\Constants\Permissions;
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

        Permission::query()->delete();

        $permissions = collect(Permissions::getAllPermissions())
            ->map(fn($permission) => ['name' => $permission, 'guard_name' => "web"])
            ->toArray();

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
