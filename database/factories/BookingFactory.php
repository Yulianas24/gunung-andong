<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'alamat' => fake()->address(),
            'ktp' => '3306120000000003',
            'telepon' => '082135135135',
            'jenis_kelamin' => 'laki-laki',
            'tanggal' => now(),
            'status' => 'pending'
        ];
    }
}
