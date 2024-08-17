
<x-main>
  <x-slot:vite> @vite(['resources\css\welcome.css','resources\js\welcome.js']);</x-slot>
<section>
<!-- Slider main container -->
<div class="swiper FirstSwiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <div class="swiper-slide">Slide 1</div>
      <div class="swiper-slide">Slide 2</div>
      <div class="swiper-slide">Slide 3</div>
      ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
   {{--  <div class="swiper-button-prev"></div> --}}
   {{--  <div class="swiper-button-next"></div> --}}
  
    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
</section>

<div class="diviso"></div>

{{-- SECONDO SWIPER---------- --}}
<div class="swiper mySwiper " style="overflow-y: visible; overflow-x:clip ">
  <div class="swiper-wrapper " >

    @foreach($film as $titolo)

    
    <a href="{{route('titolo',['film'=>$titolo])}}" class="swiper-slide " id="slide" value="<?php echo $titolo->name ?>" value2="<?php echo $titolo->descrizione ?>" value3="<?php echo $titolo ?>" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image))
    {{Storage::url($titolo->image)}}
    @else {{$titolo->image}} @endif); ">

    </a>
   
   @endforeach
   
  </div>
 {{--  <div class="swiper-pagination " ></div> --}}
</div>
{{-- <button class="hidden float-end" id="bottone"> X </button>  --}}






{{-- ----------DA VEDERE --}}
<script type="text/javascript">
  let slide= document.querySelectorAll('#slide');
  
  

   slide.forEach(element => {
     
         element.addEventListener('mouseover',()=>{
         
           
           /*  element.classList.remove('.swiper-slide'); */
            element.classList.add('open');
            element.innerHTML="";
           element.innerHTML= `<h1 class="text-center">`+element.getAttribute('value')+' </h1>'+"<br>"+'<p class="text-center">'+element.getAttribute('value2')+'</p>';
          
            console.log('successo');
          
           });


           element.addEventListener('mouseout', ()=>{
        
           
           element.classList.remove('open');
            element.innerHTML="";
           
           }); 
        

          });
</script> 


<div class="diviso"></div>

{{-- TERZO SWIPER---------- --}}
<div class="swiper mySwiper z-0">
  <div class="swiper-wrapper">

    @foreach($film as $titolo)



    <div class="swiper-slide "  style="background-image: url( @if(Storage::disk('local')->exists($titolo->image) )
    
    {{Storage::url($titolo->image)}}
    @else {{$titolo->image}} @endif
   )">
     {{--  <x-card :width=300 :height=150  :name="$titolo->name" :url="$titolo->image" /> --}}
      
    </div>
@endforeach
  </div>
  <div class="swiper-pagination"></div>
</div>












</x-main>