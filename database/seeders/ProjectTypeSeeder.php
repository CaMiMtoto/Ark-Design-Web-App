<?php

namespace Database\Seeders;

use App\Models\ProjectType;
use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $names = [
            'Web Development',
            'Mobile Development',
            'Desktop Development',
            'Game Development',
            'Other',
        ];
        if(ProjectType::query()->count() > 0) {
            return;
        }
        foreach ($names as $name) {
            ProjectType::query()->create([
                'name' => $name,
            ]);
        }
    }
}
