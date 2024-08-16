<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recensioni>
 */
class RecensioniFactory extends Factory
{
    
    

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titolo'=>fake()->name(),
            'recensione'=>fake()->text(),
            'user_id'=>rand(1, User::all()->count()),
            'film_id'=>rand(1, Film::all()->count()),
        ];
    }
}
