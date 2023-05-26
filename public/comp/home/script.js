const slider = document.querySelector('.slider');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const slideWidth = slider.clientWidth;
let slideIndex = 0;

prevBtn.addEventListener('click', () => {
  slideIndex = (slideIndex - 1 + 2) % 2; // Adjust the number based on the number of slides
  slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
});

nextBtn.addEventListener('click', () => {
  slideIndex = (slideIndex + 1) % 2; // Adjust the number based on the number of slides
  slider.style.transform = `translateX(-${slideIndex * slideWidth}px)`;
});

// window.addEventListener('load', function() {
//     // Perform any necessary backend operations here
    
//     // Simulate a delay of 3 seconds
//     setTimeout(function() {
//       // Redirect or perform any other action when loading is complete
//       window.location.href = '/';
//     }, 3000);
//   });