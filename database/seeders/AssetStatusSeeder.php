<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssetStatus;

class AssetStatusSeeder extends Seeder
{
    public function run()
    {
        // Define default asset statuses
        $statuses = [
            ['status_name' => 'Active'],
            ['status_name' => 'Retired'],
            ['status_name' => 'Disposed'],
        ];

        // Insert statuses into the database
        foreach ($statuses as $status) {
            AssetStatus::create($status);
        }
    }
}