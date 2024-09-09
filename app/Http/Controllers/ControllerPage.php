<?php

namespace App\Http\Controllers;

use App\Http\Requests\recensioniRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\uploadRequest;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Recensioni;
use App\Models\User;

use function Laravel\Prompts\alert;

class ControllerPage extends Controller
{
    public function welcome(Film $film){
        $FirstCarousel= DB::table('film')->where('id','<=','3')->get();
      $horror=  DB::table('film')->where('film_id','2')->get();
   $comico= DB::table('film')->where('film_id','1')->get();
   $thriller= DB::table('film')->where('film_id','3')->get();
   $drama= DB::table('film')->where('film_id','4')->get();
            $film=Film::all();
            return view('pages/welcome', compact('film','horror','comico','thriller','drama', 'FirstCarousel'));
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


    public function genere( Categorie $category, $tipo){
      $categoria= Categorie::where('category', $tipo);
   $horror=  DB::table('film')->where('film_id','2')->get();
   $comico= DB::table('film')->where('film_id','1')->get();
   $thriller= DB::table('film')->where('film_id','3')->get();
   $drama= DB::table('film')->where('film_id','4')->get();
 
   

 return view('pages/genere',compact('categoria','horror','comico', 'thriller', 'drama', 'tipo'));
    }

    public function recensione(recensioniRequest $request,  $user, $filmid){

      $request->validated();

      $recensione= Recensioni::create([
        'titolo'=>$request->input('titolo'),
        'recensione'=>$request->input('recensione'),
        'user_id'=>$user,
        'film_id'=>$filmid,
      ]);

   return  redirect()->route('titolo', ['film'=>$filmid]);
}

}

  



