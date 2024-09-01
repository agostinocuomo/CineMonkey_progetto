
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
        @else {{$first->image}} @endif); background-size:cover; background-repeat:none; background-position: center; "><h1 class="fs-1 text-center">{{$first->name}}</h1></div>
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
<section>
<div class="swiper mySwiper " style="overflow-y: visible; overflow-x:clip ">
  <div class="swiper-wrapper " >

    @foreach($film as $titolo)

    
    <a href="{{route('titolo', ['film'=>$titolo])}}" class="swiper-slide " id="slide" value="<?php echo $titolo->name ?>" value2="<?php echo $titolo->descrizione ?>" value3="<?php echo $titolo ?>" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image))
    {{Storage::url($titolo->image)}}
    @else {{$titolo->image}} @endif); background-position: center; ">
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
</section>


<section>
<div class="diviso bamboo-effect"> <h1>Genere: Horror</h1></div>
@if($horror != [])

{{-- TERZO SWIPER---------- --}}
<div class="swiper mySwiper " style="overflow-y: visible; overflow-x:clip ">
  <div class="swiper-wrapper">

  

    @foreach($horror as $titolo)
    

    <a href="{{route('titolo', ['film'=> $titolo->id])}}" class="swiper-slide" value="<?php echo $titolo->name ?>" value2="<?php echo $titolo->descrizione ?>"  id="slide2" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image) )
    {{Storage::url($titolo->image)}}
    @else {{$titolo->image}} @endif
   ); background-position: center;">
    <?php echo $titolo->name?>
    
    </a>
@endforeach
  </div>
  <div class="swiper-pagination"></div>
</div>

@else
    <div class="swiper-slide">
    <h1 class="text-center fw-nold">Arriveranno nuovi contenuti</h1>
  </div>
    @endif


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
</section>



<section>
  <div class="diviso bamboo-effect"> <h1>Genere: Commedy</h1></div>
  
  @if($comico!= [])
  {{-- QUARTO SWIPER---------- --}}
  <div class="swiper mySwiper " style="overflow-y: visible; overflow-x:clip ">
    <div class="swiper-wrapper">
  
    
  
      @foreach($comico as $titolo)
      
  
      <a href="{{route('titolo', ['film'=> $titolo->id])}}" class="swiper-slide" value="<?php echo $titolo->name ?>" value2="<?php echo $titolo->descrizione ?>"  id="slide5" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image) )
      {{Storage::url($titolo->image)}}
      @else {{$titolo->image}} @endif
     ); background-position: center;">
      <?php echo $titolo->name?>
      
      </a>
  @endforeach
    </div>
    <div class="swiper-pagination"></div>
  </div>

  @else
    <div class="swiper-slide">
    <h1 class="text-center fw-nold">Arriveranno nuovi contenuti</h1>
  </div>
    @endif




  <script type="text/javascript">
  
    let slide5= document.querySelectorAll('#slide5');
    
    
  
     slide5.forEach(element => {
       
           element.addEventListener('mouseover',()=>{
           
             
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
  </section>



 

  <section>
    <div class="diviso bamboo-effect"> <h1>Genere: Drama</h1></div>
    @if($drama != [])
   
    {{-- QUARTO SWIPER---------- --}}
    <div class="swiper mySwiper " style="overflow-y: visible; overflow-x:clip ">
      <div class="swiper-wrapper">
    
      
  
        @foreach($drama as $titolo)
        
    
        <a href="{{route('titolo', ['film'=> $titolo->id])}}" class="swiper-slide" value="<?php echo $titolo->name ?>" value2="<?php echo $titolo->descrizione ?>"  id="slide3" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image) )
        {{Storage::url($titolo->image)}}
        @else {{$titolo->image}} @endif
       ); background-position: center;">
        <?php echo $titolo->name?>
        
        </a>
    @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>

    @else
    <div class="swiper-slide">
    <h1 class="text-center fw-nold">Arriveranno nuovi contenuti</h1>
  </div>
    @endif


    <script type="text/javascript">
    
      let slide3= document.querySelectorAll('#slide3');
      
      
    
       slide3.forEach(element => {
         
             element.addEventListener('mouseover',()=>{
             
               
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
    </section>
  

    <section>
      <div class="diviso bamboo-effect"> <h1>Genere: Thriller</h1></div>
      @if($thriller != [])
     
      {{-- QUARTO SWIPER---------- --}}
      <div class="swiper mySwiper " style="overflow-y: visible; overflow-x:clip ">
        <div class="swiper-wrapper">
      
        
      
          @foreach($thriller as $titolo)
          
      
          <a href="{{route('titolo', ['film'=> $titolo->id])}}" class="swiper-slide" value="<?php echo $titolo->name ?>" value2="<?php echo $titolo->descrizione ?>"  id="slide4" style="background-image: url( @if(Storage::disk('local')->exists($titolo->image) )
          {{Storage::url($titolo->image)}}
          @else {{$titolo->image}} @endif
         ); background-position: center;">
          <?php echo $titolo->name?>
          
          </a>
      @endforeach
        </div>
        <div class="swiper-pagination"></div>
      </div>
  
      @else
      <div class="swiper-slide">
      <h1 class="text-center fw-nold">Arriveranno nuovi contenuti</h1>
    </div>
  
      @endif
  
  
      <script type="text/javascript">
      
        let slide4= document.querySelectorAll('#slide4');
        
        
      
         slide4.forEach(element => {
           
               element.addEventListener('mouseover',()=>{
               
                 
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
      </section>
    


    







</x-main>