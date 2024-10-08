<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorie>
 */
class CategorieFactory extends Factory
{

    protected $category=['horror', 'thriller','drama','comico'];
  protected $i=0;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    
       
        return [
           
            'category'=>$this->category[rand(1,3)],
        ];
   
    }
}
