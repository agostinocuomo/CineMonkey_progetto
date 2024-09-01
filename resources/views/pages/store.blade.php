<x-main>
    <x-slot:vite></x-slot>

 {{--    TUTTI I PRODOTTI--------- --}}
 
    <div class="d-flex flex-wrap justify-content-between m-3">

 @foreach($film as $titolo)
 <div class="card" style="width: 18rem;">
    <img src="@if(Storage::disk('local')->exists($titolo->image) )    {{Storage::url($titolo->image)}}  @else {{$titolo->image}} @endif" class="card-img-top" alt="...">
    <div class="card-body">
      <h1>{{$titolo->name}}</h1>
    </div>
  </div>
<a href="{{ route('titolo', ['film'=>$titolo]) }}">
    <div class="card" style="width: 18rem;">
        <img src="@if(Storage::disk('local')->exists($titolo->image) )    {{Storage::url($titolo->image)}}  @else {{$titolo->image}} @endif" class="card-img-top" alt="...">
        <div class="card-body">
          <h1>{{$titolo->name}}</h1>
        </div>
      </div>
</a>
@endforeach

</div>



</x-main>