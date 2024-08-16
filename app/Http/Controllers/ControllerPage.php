<?php

namespace App\Http\Controllers;

use App\Http\Requests\uploadRequest;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Recensioni;
use App\Models\User;

class ControllerPage extends Controller
{
    public function welcome(Film $film){
        
            $film=Film::all();
            return view('pages/welcome', compact('film'));
    }

    public function store(Film $film){
        $film=Film::all();
        return view ('pages/store', compact('film'));
    }


    public function update(Categorie $categorie){
        $categorie=Categorie::all();
        $i=0;
        return view('pages/adminpage/update', compact('categorie'));
    }


    public function uploadTitolo(uploadRequest $request){

      $request->validated();

         
        

        $path_image='';
        if($request->hasFile('imagetitolo') && $request->file('imagetitolo')->isValid()){
         $path_name = $request->file('imagetitolo')->getClientOriginalName();
         $path_image = $request->file('imagetitolo')->storeAs( 'public/images', $path_name);
        }

     
      $film= Film::create([
            'name'=>$request->input('nametitolo'),
            'descrizione'=>$request->input('descrizione'),
          /*   'film_id'=>rand(1,6), */
            'film_id'=>$request->genere,
            'image'=> $path_image,
            
       ]);
             
    
       if($film){
       return redirect()->route('welcome')->with('messages', 'Buon Fine');
       } else{
        return redirect()->route('update')->with('messages', 'Salvataggio non riuscito');
       }

   

    }

    public function titolo(Film $film, Recensioni $recensioni,Categorie $category, User $user){
      
       
        $category=Categorie::all();
        $user=User::all();
        $recensioni=Recensioni::all();
             
        return view('pages/titolo', compact('film', 'recensioni','user','category'));
    }
}


