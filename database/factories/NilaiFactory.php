<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nilai>
 */
class NilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nilai'   => rand(50,100),
            'user_id'   => 2,
            'mapel_id'   => rand(1,2),
            'ruangan_id'   => rand(1,2),
            'waktu'    => fake()->datetime()
        ];
    }
}
