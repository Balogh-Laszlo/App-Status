<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\App>
 */
class AppFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence,
            'excerpt' => implode("\n", $this->faker->paragraphs(2)),
            'description' => implode("\n", $this->faker->paragraphs(6))
        ];
    }
}
