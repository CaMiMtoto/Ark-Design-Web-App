<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {

            User::create([
                'name' => 'Admin',
                'email' => 'admin@ark.com',
                'password' => bcrypt('password'),
                'is_super_admin' => true
            ]);
        }
    }
}
