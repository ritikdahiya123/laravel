$(document).ready(function(){

    //hamburger Toggle
      $('.humbarger').click(function(event){
      $('.menu-list').slideToggle(500);
      event.preventDefault();
  
      $('.menu-list li a').click(function(event) {
          if ($(window).width() < 768) {
            $('.menu-list').slideUp(500);
            event.preventDefault(); 
          }
        });
    });
  
  });
  let currentIndex = 0;

      function nextSlide() {
        currentIndex = (currentIndex + 1) % 6; // Adjust the number based on the number of cards
        updateSlider();
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + 6) % 6; // Adjust the number based on the number of cards
        updateSlider();
      }

      function updateSlider() {
        const sliderContent = document.querySelector(".slider-content");
        const cardWidth =
          document.querySelector(".review-card").offsetWidth + 20; // Adjusted width including margin
        sliderContent.style.transform = `translateX(${
          -currentIndex * cardWidth
        }px)`;
      }
      