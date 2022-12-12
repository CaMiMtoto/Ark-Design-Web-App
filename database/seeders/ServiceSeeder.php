<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['name' => 'Building Design', 'service_type_id' => 1],
            ['name' => 'Landscape Design', 'service_type_id' => 1],
            ['name' => 'Interior Design', 'service_type_id' => 1],

            ['name' => 'Land use consultancy', 'service_type_id' => 2],
            ['name' => 'Documents for permit application', 'service_type_id' => 2],
            ['name' => 'Structure, Mechanical, Electrical, Plumbing documents', 'service_type_id' => 2],

            ['name' => 'Site supervision', 'service_type_id' => 3],
            ['name' => 'Quantity surveying', 'service_type_id' => 3],
            ['name' => 'Structural analysis', 'service_type_id' => 3],
            ['name' => 'Plot boundary demarcation', 'service_type_id' => 3],
            ['name' => 'Land surveying works', 'service_type_id' => 3],
            ['name' => 'Physical plans elaboration', 'service_type_id' => 3],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
