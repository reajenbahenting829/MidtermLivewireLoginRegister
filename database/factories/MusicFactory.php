<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Music>
 */
class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genre = ['Rock', 'Pop', 'Reggae', 'Acoustic', 'Classical'];
        return [
            'band' => fake()->name(),
            'location' => fake()->city(),
            'contact'=> fake()->phoneNumber(),
            'rate'=> fake()->numberBetween($min = 2000, $max = 12000),
            'genre'=> $this->faker->randomElement($genre),
            'description'=> fake()->sentence(),
            'image'=> 'images.jpg'
        ];
    }
}
