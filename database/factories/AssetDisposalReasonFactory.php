<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AssetDisposalReason;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssetDisposalReason>
 */
class AssetDisposalReasonFactory extends Factory
{

    protected $model = AssetDisposalReason::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'reason' => $this->faker->randomElement(['Obsolete', 'Damaged', 'Failure', 'End of Life', 'Other']),
        ];
    }
}
