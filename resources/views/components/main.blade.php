
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CineForum</title>

   {{--  VITE --}}
   
   @vite(['resources\css\app.css', 'resources\js\app.js']);
   {{$vite}}


    

   {{--  SWIPE LINK --}}
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
   {{--  SWIPER SCRIPT --}}
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>



<body class="jungle-background">
{{--     NAVBAR-------------- --}}
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bamboo-effect" {{-- style=" background-image: var(--coloreNav)" --}}>
        <div class="container-fluid">
          <h2 class="navbar-brand" >CineMonkey</h2>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item  border border-4 border-warning-subtle mx-2">
                <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
              </li>
              <li class="nav-item border border-4 border-warning-subtle mx-2">
                <a class="nav-link active" href="{{route('store')}}">Tutti i prodotti</a>
              </li>
            
              <li class="nav-item border border-4 border-warning-subtle mx-2">
                <a class="nav-link active" href="#">Info</a>
              </li>


              <li class="nav-item dropdown border border-4 border-warning-subtle">
                <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Generi
                </a>
                <ul class="dropdown-menu"  style=" background-image: radial-gradient( rgba(110, 109, 16, 0.3) 20%,   rgba(110, 109, 16, 0.7) 80%)">
           @foreach($category as $category)
                 <li><a class="dropdown-item" href="{{route('genere', ['tipo'=>$category->category])}}">{{$category->category}} </a></li> 
                  @endforeach
                </ul>
                
              </li>
              
            </ul>


           
            @auth
            <h2>Ciao, {{Auth::user()->name}}</h2>

            @if(Auth::user()->admin== 1)
            <a  type="button" class="btn text-dark" href="{{route('update')}}"  style=" background-image: linear-gradient( rgba(32, 75, 45, 0.884) 30%,   rgba(28, 197, 42, 0.7) 50%)">Aggiungi titoli</a>
            @endif

            <form action="{{route('logout')}}" method="POST">
              @csrf

              <button  class="btn btn-danger">Logout</button>
            </form>
           
                @else 
                <a type="button" class="btn m-3" style=" background-image: linear-gradient( rgba(32, 75, 45, 0.884) 30%,   rgba(28, 197, 42, 0.7) 50%)" href="{{route('registerpage')}}">Register</a>
                <a type="button" class="btn m-3" href="{{route('loginpage')}}" style=" background-image: linear-gradient( rgba(32, 75, 45, 0.884) 30%,   rgba(28, 197, 42, 0.7) 50%)" >Login</a>
            @endauth
           
            {{-- <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
          </div>
        </div>
      </nav>
    </header>

       {{--  FINE NAVBAR------------------ --}}
    {{$slot}}



</body>
</html>