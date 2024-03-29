<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asset;
use App\Models\AssetStatus;
use App\Models\Employee;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create 10 assets
        Asset::factory()->count(10)->create()->each(function ($asset) {
            // Get a random employee id
            $randomEmployeeId = Employee::inRandomOrder()->pluck('id')->first();

            // Assign the random employee id to the asset
            $asset->employee_id = $randomEmployeeId;

            // Get a random status from the statuses table
            $randomStatus = AssetStatus::inRandomOrder()->first();

            // Assign the random status to the asset
            $asset->status_id = $randomStatus->id;

            $asset->save();
        });
    }
}