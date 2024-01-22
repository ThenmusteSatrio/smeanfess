<?php

namespace Database\Factories;

use App\Models\Pesan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pesan>
 */
class PesanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $pesan = Pesan::class;
    public function definition(): array
    {
        return [
            'pesan' => $this->faker->realTextBetween($minNbChars = 50, $maxNbChars = 70, $indexSize = 2),
            'status' => $this->faker->randomElement(['menfess', 'kritik']),
        ];
    }
}
