<?php

namespace Database\Seeders;

/* use Illuminate\Database\Console\Seeds\WithoutModelEvents; */
use Illuminate\Database\Seeder;
use App\Models\Film;

class FIlmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::factory()->count(50)->create();
    }
}
