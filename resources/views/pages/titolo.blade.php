<x-main>
<x-slot:vite></x-slot>
<div>
    <img src=" @if(Storage::disk('local')->exists($film->image) )    {{Storage::url($film->image)}}  @else {{$film->image}} @endif" alt="copertina">
    <h1>{{$film->name}}</h1>
    <p>{{$film->descrizione}}</p>
    <h3>{{$film->category->category ?? null}} </h3>
</div>
<div>
    @foreach($recensioni as $recensione)

    @if($recensione->film->name==$film->name)
    <h1>{{$recensione->titolo}}</h1>
    <p>{{$recensione->recensione}}</p>
    <h3>{{$recensione->User->name ?? null}}</h3>
    <h3>{{$recensione->film->name}}</h3>
    @endif

    @endforeach
</div>
</x-main>



