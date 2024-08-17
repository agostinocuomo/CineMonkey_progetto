<x-main>
<x-slot:vite></x-slot>
<div>

            <div style="background-image: url('@if(Storage::disk('local')->exists($film->image) )    {{Storage::url($film->image)}}  @else {{$film->image}} @endif'); height:700px; width:100%; background-repeat:none; background-size:cover;">
  
    </div>
  
    <h1 class="text-center">{{$film->name}}</h1>
    <p class="text-center">{{$film->descrizione}}</p>
    <h3 class="text-center">{{$film->category->category ?? null}} </h3>
</div>



{{-- --------RECENSIONI --}}
<div>
    @foreach($recensioni as $recensione) 
    @if($recensione->film->name==$film->name)
    <h1 class="m-5 text-center border border-3 border-dark" style="background-image: var(--coloreNav)">Tutte le recensioni</h1>
    <div class="d-flex flex-wrap justify-content-between  border border-3 border-warning" style="max-width:300px">
    <h1>{{$recensione->titolo}}</h1>
    <p>{{$recensione->recensione}}</p>
    <h3>Autore: {{$recensione->User->name ?? null}}</h3>
    <h3>{{$recensione->film->name}}</h3>
    </div>
    @endif
    @endforeach
</div>
</x-main>



