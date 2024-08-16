<?php

namespace App\Models;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

   protected $fillable=['category', 'category_id'];

   public function Film()
   {
       return $this->hasMany(Film::class, 'film_id');
   }
}
