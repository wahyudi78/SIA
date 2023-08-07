<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Absensi>
 */
class AbsensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis'   => rand(1,2),
            'waktu'  => fake()->datetime(),
            'guru_id'    => 1,
            'ruangan_id'    =>1,
            'mapel_id'    =>1,
        ];
    }
}
