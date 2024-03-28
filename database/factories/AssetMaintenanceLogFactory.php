<?php

namespace Database\Factories;
use App\Models\AssetMaintenanceLog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssetMaintenanceLog>
 */
class AssetMaintenanceLogFactory extends Factory
{

    protected $model = AssetMaintenanceLog::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_id' => \App\Models\Asset::factory()->create()->id,
            'maintenance_date' => $this->faker->dateTimeThisYear(),
            'maintenance_description' => $this->faker->sentence,
        ];
    }
}
