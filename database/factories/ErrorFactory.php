<?php

namespace Database\Factories;

use App\Constants\FeatureStatusEnum;
use App\Models\Feature;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Error>
 */
class ErrorFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'feature_id' => Feature::factory(),
            'description' => $this->faker->sentence,
            'status' => FeatureStatusEnum::WARNING,
            'occurred_at' => Carbon::now()->subDay()
        ];
    }
}
