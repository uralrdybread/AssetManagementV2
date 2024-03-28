<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\AssetDisposal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssetDisposal>
 */
class AssetDisposalFactory extends Factory
{

    protected $model = AssetDisposal::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_id' => \App\Models\Asset::factory()->create()->id,
            'disposal_date' => $this->faker->dateTimeThisYear(),
            'disposal_reason_id' => \App\Models\AssetDisposalReason::factory()->create()->id,
            'disposal_document' => $this->faker->sentence,
        ];
    }
}
