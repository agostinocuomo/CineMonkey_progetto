<?php

namespace Database\Factories;

use App\Models\Film;
use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
  
   
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       

        return [
            'name'=>fake()->name(),
            'descrizione'=>fake()->text(),
            'image'=>fake()->imageUrl(),
            'film_id'=>rand(1,4),
        ];
    }
}
