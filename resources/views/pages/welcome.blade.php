
<x-main>
  <x-slot:vite> @vite(['resources\css\welcome.css','resources\js\welcome.js']);</x-slot>
<section>
<!-- Slider main container -->
<div class="swiper FirstSwiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      @forEach($FirstCarousel as $first)
      <div class="swiper-slide" style="background-image: url( @if(Storage::disk('local')->exists($first->image))
        {{Storage::url($first->image)}}
        @else {{$first->image}} @endif); background-size:cover; background-repeat:none;"><h1 class="fs-1 text-center">{{$first->name}}</h1></div>
      @endforeach
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

<div class="diviso bamboo-effect"></div>

{{-- SECONDO SWIPER---------- --}}
<div class="swiper mySwiper " style="overflow-y: visible; overflow-x:clip ">
  <div class="swiper-wrapper " >

    @foreach($film as $titolo)

    
    <a href="{{route('titolo', ['film'=>$titolo])}}" class="swiper-slide " id="slide" value="<?php echo $titolo->name ?>" value2="<?php echo $titolo->descrizione ?>" value3="<?php echo $titolo ?>" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image))
    {{Storage::url($titolo->image)}}
    @else {{$titolo->image}} @endif); ">

    </a>
   
   @endforeach
   
  </div>
 {{--  <div class="swiper-pagination " ></div> --}}
</div>
{{-- <button class="hidden float-end" id="bottone"> X </button>  --}}



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


<div class="diviso bamboo-effect"> <h1>Genere: Horror</h1></div>

{{-- TERZO SWIPER---------- --}}
<div class="swiper mySwiper " style="overflow-y: visible; overflow-x:clip ">
  <div class="swiper-wrapper">

    @foreach($horror as $titolo)



    <a href="" class="swiper-slide " id="slide2" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image) )
    
    {{Storage::url($titolo->image)}}
    @else {{$titolo->image}} @endif
   )">
      
     </a>
@endforeach
  </div>
  <div class="swiper-pagination"></div>
</div>

<script type="text/javascript">

  let slide2= document.querySelectorAll('#slide2');
  
  

   slide2.forEach(element => {
     
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










</x-main>