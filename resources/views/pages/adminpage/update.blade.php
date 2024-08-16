<x-main>
<x-slot:vite></x-slot>

<h1>Inserisci un nuovo Titolo</h1>

<form action="{{route('uploadTitolo')}}" method="POST"  enctype="multipart/form-data">

  
    @csrf
    @method('post')

    <div class="mb-3">
      <label for="nametitolo" class="form-label">Nome Film</label>
      <input type="text" class="form-control" id="nametitolo" name="nametitolo" aria-describedby="emailHelp">
      </div>
      
       
    @error('nametitolo')
    <span>{{ $message }}</span>
    @enderror

      <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="descrizione" name="descrizione" aria-describedby="emailHelp">
        </div>

         
    @error('descrizione')
    <span>{{ $message }}</span>
    @enderror

    <div class="mb-3">
      <label for="imagetitolo" class="form-label">Image</label>
      <input type="file" class="form-control" id="imagetitolo" name="imagetitolo" >
    </div>

     
    @error('imagetitolo')
    <span>{{ $message }}</span>
    @enderror

<label for="genere"> Categoria</label>
    <select   class="form-select"  aria-label="Default select example" id="genere" name="genere">
        <option selected value="null">Scegli un genere</option>
        @foreach($categorie as $category)
        <option value='{{$category->id}}'  id="genere" name="genere">{{$category->category }} </option>
        @endforeach
      </select>

      @error('genere')
      <span>{{ $message }}</span>
      @enderror
  
   

    <button type="submit" class="btn btn-primary mt-5">Salva</button>
  </form>




</x-main>