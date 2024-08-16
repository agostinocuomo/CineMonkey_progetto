
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


    <div class="swiper-slide " id="slide" value="<?php echo $titolo->name ?>" value2="<?php echo $titolo->descrizione ?>" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image))
    {{Storage::url($titolo->image)}}
    @else {{$titolo->image}} @endif); ">
    
    </div>
   @endforeach

  
   
  </div>
 {{--  <div class="swiper-pagination " ></div> --}}
</div>

<script type="text/javascript">
  let slide= document.querySelectorAll('#slide');
 
  
  let chiusura=false;
    
  
    function  openCard(){
      if(chiusura==false){

        
        chiusura=true;
    slide.forEach(element => {
        element.addEventListener('click',()=>{
            element.style.zIndex='3';
            element.style.transform='scale(2) ';
            element.classList.remove('.swiper-slide');
            element.classList.add('.open');
            element.style.position='static';
            element.style.top='50%';
            element.style.left=`50%`;
           element.innerHTML="";
           element.innerHTML='<button class="float-end bottone" id="bottone"> X </button> <h1 class="text-center">'+element.getAttribute('value')+' </h1>'+"<br>"+'<p class="text-center">'+element.getAttribute('value2')+'</p>'+'<button class="bottone" id="bottone">Vai alla pagina</button>';
            console.log('successo');
            
           })
          });
        };
        };
      /*   ----non funziona */
        function closeCard() {
          let closedbutton= document.querySelector('#bottone');
          let open= document.querySelector('.open');
          console.log(open);
          console.log(closedbutton)
         /*  Xbtn.addEventListener('click', ()=>{
            open.innerHTML="";
          }); */
        }
        
        openCard();
        closeCard();
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