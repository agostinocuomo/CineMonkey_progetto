<x-main>
    <x-slot:vite></x-slot>

 {{--    TUTTI I PRODOTTI--------- --}}
 <div class="container-fluid">
<div class="row flex-wrap">


 @foreach($film as $titolo)
<a href="{{ route('titolo', ['film'=>$titolo]) }}">
<div class="col-3 m-2" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image) )    {{Storage::url($titolo->image)}}  @else {{$titolo->image}} @endif)">

    <h3>{{$titolo->name}}</h3>
</div>
</a>
@endforeach

</div>
 </div>


</x-main>