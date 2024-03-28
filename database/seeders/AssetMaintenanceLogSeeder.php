<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssetMaintenanceLog;

class AssetMaintenanceLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AssetMaintenanceLog::factory()->count(10)->create();
    }
}
