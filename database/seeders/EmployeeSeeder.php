<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\EmployeeFactory;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        EmployeeFactory::new()->count(10)->create();
    }
}
