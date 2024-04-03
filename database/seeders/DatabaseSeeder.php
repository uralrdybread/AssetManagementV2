<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AssetDisposalReasonSeeder::class,
            AssetDisposalSeeder::class,
            AssetMaintenanceLogSeeder::class,
            AssetSeeder::class,
            AssetStatusSeeder::class,
            EmployeeSeeder::class,
        ]);
    }
}