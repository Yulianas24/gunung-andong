<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Booking::factory(10)->create();
        \App\Models\Booking::factory(10)->create([
            'tanggal' => date('2023-01-17 06:22:43'),
        ]);
        \App\Models\Booking::factory(10)->create([
            'tanggal' => date('2023-01-18 06:22:43'),
        ]);
        \App\Models\Booking::factory(10)->create([
            'tanggal' => date('2023-01-19 06:22:43'),
        ]);
        \App\Models\Booking::factory(10)->create([
            'tanggal' => date('2023-01-20 06:22:43'),
        ]);
        \App\Models\Booking::factory(10)->create([
            'tanggal' => date('2023-01-10 06:22:43'),
            'status' => 'keluar',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
        ]);
    }
}
