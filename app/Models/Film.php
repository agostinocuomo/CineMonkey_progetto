<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;

class Film extends Model
{
    use HasFactory;

    protected $table= 'Film';
    protected $fillable=['name','descrizione','image','film_id'];

    public function Category(){
       return $this->belongsTo(Categorie::class, 'id');
    }

    public function Recensioni()
    {
        return $this->hasMany(Recensioni::class, 'film_id');
    }
    
}
