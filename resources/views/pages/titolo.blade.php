<x-main>
<x-slot:vite></x-slot>
<div>

            <div style="background-image: url('@if(Storage::disk('local')->exists($film->image) )    {{Storage::url($film->image)}}  @else {{$film->image}} @endif'); height:700px; width:100%; background-repeat:none; background-size:cover;">
  
    </div>
  
    <h1 class="text-center">{{$film->name}}</h1>
    <p class="text-center">{{$film->descrizione}}</p>
    <h3 class="text-center">{{$film->category->category ?? null}} </h3>
</div>



{{-- ----------FORM INVIO RECENSIONI --}}
<div class=" d-flex flex-row justify-content-between">
    @auth
    <aside class="w-25 m-5 ">
        <?php
            $user=  Auth::user()->id;
            $filmid=  $film->id;
            ?>
        <h1 class="mt-5">Inserisci la recensione per il titolo</h1>
        <form action="{{route('recensione', compact('user', 'filmid'))}}" method="POST" class="border border-3 border-dark mt-5">
            @method('post')
            @csrf
            <div class="mb-3">
              <label for="titolo" class="form-label">titolo</label>
              <input type="name" class="form-control" id="titolo" name="titolo" aria-describedby="emailHelp">
            </div>

            @error('titolo')
    <span>{{ $message }}</span>
    @enderror

            <div class="mb-3">
              <label for="recensione" class="form-label">descrizione</label>
              <input type="text" class="form-control" name="recensione" id="recensione">
            </div>

            @error('recensione')
    <span>{{ $message }}</span>
    @enderror
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </aside>

@endauth
{{-- --------RECENSIONI --}}
<div class="d-flex flex-column" style="max-width: 70%">
<h1 class=" bamboo-effect m-5 text-center w-100 border border-3 border-dark " style="height: 100px">Tutte le recensioni</h1>
    <div class=" d-flex flex-wrap justify-content-between ">
    @foreach($recensioni as $recensione) 
    @if($recensione->film_id == $film->id)
    <div class=" d-flex flex-wrap flex-column  border border-3 border-warning bamboo-effect m-2" style="max-width:300px; max-height:500px">
    <h1>{{$recensione->titolo}}</h1>
    
    <p>{{$recensione->recensione}}</p>
    
    <h3>Autore: {{$recensione->user->name ?? null}}</h3>
    
    <h3>{{$recensione->film->name}}</h3>
    </div>
 
    @endif
    @endforeach
</div>
</div>
</div>

</x-main>



