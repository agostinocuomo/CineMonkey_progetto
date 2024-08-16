<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recensioni extends Model
{
    use HasFactory;

    protected $fillable =['titolo','recensione','user_id','film_id'];

    public function User(){
        return $this->belongsTo(User::class, 'id');
     }

     public function Film(){
        return $this->belongsTo(Film::class, 'id');
     }
}
