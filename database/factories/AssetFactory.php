<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Asset;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asset::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company' => $this->faker->company,
            'model' => $this->faker->word,
            'serial' => Str::random(10), // Generate a random serial number
            'history_log' => $this->faker->text,
            'assignment_date' => $this->faker->dateTimeBetween('-1 year', 'now'), // Random assignment date within the past year
            'status_id' => 1, // Default status (adjust as needed based on your status IDs)
        ];
    }
}