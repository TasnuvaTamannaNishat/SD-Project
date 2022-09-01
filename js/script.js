let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');
let videoBtn = document.querySelectorAll('.vid-btn');


menu.onclick = () =>{
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
};

videoBtn.forEach(btn =>{
   btn.addEventListener('click', ()=>{
       document.querySelector('.controls .active').classList.remove('active');
       btn.classList.add('active');
       let src = btn.getAttribute('data-src');
       document.querySelector('#video-slider').src = src;
   });
});

var swiper = new Swiper(".home-slider", {
   loop:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   grabCursor:true,
   loop:true,
   autoHeight:true,
   spaceBetween: 20,
   breakpoints: {
      0: {
        slidesPerView: 1,
      },
      700: {
        slidesPerView: 2,
      },
      1000: {
        slidesPerView: 3,
      },
   },
});

let seeMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

seeMoreBtn.onclick = () =>{
   let boxes = [...document.querySelectorAll('.packages .box-container .box')];
   for (var i = currentItem; i < currentItem + 3; i++){
  seeMoreBtn.design.display='inline-block';
   };
   currentItem += 3;
   if(currentItem >= boxes.length){
      seeMoreBtn.design.display = 'none';
   }
}