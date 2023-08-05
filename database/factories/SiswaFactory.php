<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis'   => rand(0,10),
            'nama'  => fake()->sentence(),
            'alamat'    => fake()->address(),
            'kelas' => rand(1,4),
            'role' => 3
        ];
    }
}
