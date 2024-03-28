<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AssetDisposal;

class AssetDisposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AssetDisposal::factory()->count(10)->create();
    }
}
