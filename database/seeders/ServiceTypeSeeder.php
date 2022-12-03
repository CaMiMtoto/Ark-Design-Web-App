<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Web Development',
            'Mobile Development',
            'Desktop Development',
            'Game Development',
            'Other',
        ];

        if (ServiceType::query()->count() > 0) {
            return;
        }

        foreach ($names as $name) {
            ServiceType::query()->create([
                'name' => $name,
            ]);
        }
    }
}
