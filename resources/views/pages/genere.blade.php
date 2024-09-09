<x-main>


<x-slot:vite></x-slot>



<div class="d-flex flex-wrap justify-content-between m-3">
@switch($tipo)
    @case('Thriller')
    @forEach($thriller as $thriller)
  
    <a href="{{ route('titolo', ['film'=> $thriller->id]) }}">
        <div class="card" style="width: 18rem; height:500px; overflow:hidden">
            <img src="@if(Storage::disk('local')->exists($thriller->image) )    {{Storage::url($thriller->image)}}  @else {{$thriller->image}} @endif" class="card-img-top" alt="...">
            <div class="card-body">
              <h1>{{$thriller->descrizione}}</h1>
            </div>
          </div>
    </a>
     @endforeach
        @break
    @case('Commedy')
    @forEach($comico as $comico)
  
    <a href="{{ route('titolo', ['film'=> $comico->id]) }}">
        <div class="card" style="width: 18rem; height:500px; overflow:hidden">
            <img src="@if(Storage::disk('local')->exists($comico->image) )    {{Storage::url($comico->image)}}  @else {{$comico->image}} @endif" class="card-img-top" alt="...">
            <div class="card-body">
              <h1>{{$comico->descrizione}}</h1>
            </div>
          </div>
    </a>
    @endforeach
        @break
     @case('Horror')
    
     @forEach($horror as $horror)
  
    <a href="{{ route('titolo', ['film'=>$horror->id]) }}">
        <div class="card" style="width: 18rem; height:500px; overflow:hidden">
            <img src="@if(Storage::disk('local')->exists($horror->image) )    {{Storage::url($horror->image)}}  @else {{$horror->image}} @endif" class="card-img-top" alt="...">
            <div class="card-body">
              <h1>{{$horror->descrizione}}</h1>
            </div>
          </div>
    </a>
     @endforeach
            @break

      
     @case('Drama')
    
     @forEach($drama as $drama)
    
    <a href="{{ route('titolo', ['film'=>$drama->id]) }}">
        <div class="card" style="width: 18rem; height:500px; overflow:hidden">
            <img src="@if(Storage::disk('local')->exists($drama->image) )    {{Storage::url($drama->image)}}  @else {{$drama->image}} @endif" class="card-img-top" alt="...">
            <div class="card-body">
              <h1>{{$drama->descrizione}}</h1>
            </div>
          </div>
    </a>
     @endforeach
            @break
          
    @default      
@endswitch
</div>





</x-main>