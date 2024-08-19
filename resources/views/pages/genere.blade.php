<x-main>


<x-slot:vite></x-slot>



<div class="d-flex flex-wrap justify-content-between m-3">
@switch($tipo)
    @case(1)
    @forEach($thriller as $thriller)
    <div class="card my-3" style="width: 18rem; height:500px; overflow:hidden">
        <img src="@if(Storage::disk('local')->exists($thriller->image) )    {{Storage::url($thriller->image)}}  @else {{$thriller->image}} @endif" class="card-img-top" alt="...">
        <div class="card-body">
          <h1>{{$thriller->name}}</h1>
        </div>
      </div>
    <a href="{{-- {{ route('titolo', ['film'=> $thriller]) }} --}}">
        <div class="card" style="width: 18rem; height:500px; overflow:hidden">
            <img src="@if(Storage::disk('local')->exists($thriller->image) )    {{Storage::url($thriller->image)}}  @else {{$thriller->image}} @endif" class="card-img-top" alt="...">
            <div class="card-body">
              <h1>{{$thriller->descrizione}}</h1>
            </div>
          </div>
    </a>
     @endforeach
        @break
    @case(2)
    @forEach($comico as $comico)
    <div class="card my-3" style="width: 18rem; height:500px; overflow:hidden">
        <img src="@if(Storage::disk('local')->exists($comico->image) )    {{Storage::url($comico->image)}}  @else {{$comico->image}} @endif" class="card-img-top" alt="...">
        <div class="card-body">
          <h1>{{$comico->name}}</h1>
        </div>
      </div>
    <a href="{{-- {{ route('titolo', ['film'=> $comico]) }} --}}">
        <div class="card" style="width: 18rem; height:500px; overflow:hidden">
            <img src="@if(Storage::disk('local')->exists($comico->image) )    {{Storage::url($comico->image)}}  @else {{$comico->image}} @endif" class="card-img-top" alt="...">
            <div class="card-body">
              <h1>{{$comico->descrizione}}</h1>
            </div>
          </div>
    </a>
    @endforeach
        @break
     @case(5)
    
     @forEach($horror as $horror)
     <div class="card my-3" style="width: 18rem; height:500px; overflow:hidden">
        <img src="@if(Storage::disk('local')->exists($horror->image) )    {{Storage::url($horror->image)}}  @else {{$horror->image}} @endif" class="card-img-top" alt="...">
        <div class="card-body">
          <h1>{{$horror->name}}</h1>
        </div>
      </div>
    <a href="{{-- {{ route('titolo', ['film'=>$horror]) }} --}}">
        <div class="card" style="width: 18rem; height:500px; overflow:hidden">
            <img src="@if(Storage::disk('local')->exists($horror->image) )    {{Storage::url($horror->image)}}  @else {{$horror->image}} @endif" class="card-img-top" alt="...">
            <div class="card-body">
              <h1>{{$horror->descrizione}}</h1>
            </div>
          </div>
    </a>
     @endforeach
            @break

        @case(6)
        @forEach($drama as $drama)
        <h1>{{$drama->name}}</h1>
     <p>{{$drama->descrizione}}</p>
     @endforeach
    @default      
@endswitch
</div>





</x-main>