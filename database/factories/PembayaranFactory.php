<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pembayaran>
 */
class PembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode'   => rand(1,10),
            'nominal'   => rand(1,10),
            'user_id'  => 1,
            'waktu'    => fake()->datetime(),
            'status'    => rand(1,3),
        ];
    }
}
