
import 'bootstrap';

/* --  SCRIPT SWIPER--------------- -- */

const swiper = new Swiper('.FirstSwiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        type: "bullets", 
        clickable: 'true',
      },
     
   
});


const swiper2 = new Swiper(".mySwiper", {
  
    spaceBetween: 30,
    freeMode: true,
    momentumVelocityRatio:0,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });





/* MODIFICA SLIDE------------- */





/* let slide= document.querySelectorAll('#slide');




function  pagina(nome, recensione){
slide.forEach(element => {
    element.addEventListener('click',()=>{
        element.style.zIndex='3';
        element.style.transform='scale(2) ';
        element.classList.remove('.swiper-slide');
        element.style.position='static';
        element.style.top='50%';
        element.style.left=`50%`;
       element.innerHTML="";
       element.innerHTML=nome+"<br>"+recensione;
       testo();
        console.log('successo');
        
       })
      });
    };
    let dati = JSON.stringify(new URL(''));
    
    pagina(); */

   
 
  
    
