//showcase slider

let sliderImages = document.querySelectorAll(".slide"),
  arrowLeft = document.querySelector("#arrow-left"),
  arrowRight = document.querySelector("#arrow-right"),
  current = 0;
// Clear all images
function reset() {
  for (let i = 0; i < sliderImages.length; i++) {
    sliderImages[i].style.display = "none";
  }
}

// Init slider
function startSlide() {
  reset();
  sliderImages[0].style.display = "block";
}

// // Show prev
// function slideLeft() {
//   reset();
//   sliderImages[current - 1].style.display = "block";
//   current--;
// }

// Show next
function slideRight() {
  reset();
  sliderImages[current + 1].style.display = "block";
  
  current++;
}



 function slides() {
    if (current === sliderImages.length - 1) {
      current = -1;
    }
    slideRight();
  };

startSlide();

setInterval(slides, 10000);










// testimonials

let testimonialsliderImages = document.querySelectorAll(".testimonial-slide"),
testimonialarrowLeft = document.querySelector("#testimonial-arrow-left"),
testimonialarrowRight = document.querySelector("#testimonial-arrow-right"),
testimonialcurrent = 0;



// Clear all images
function testimonialreset() {
  for (let i = 0; i < testimonialsliderImages.length; i++) {
    testimonialsliderImages[i].style.display = "none";
  }
}

// Init slider
function testimonialstartSlide() {
  testimonialreset();
  testimonialsliderImages[0].style.display = "block";
}

// Show prev
function testimonialslideLeft() {
  testimonialreset();
  testimonialsliderImages[testimonialcurrent - 1].style.display = "block";
  testimonialcurrent--;
}

// Show next
function testimonialslideRight() {
  testimonialreset();
  if (testimonialcurrent === testimonialsliderImages.length - 1) {
    testimonialcurrent = -1;
  }
  testimonialsliderImages[testimonialcurrent + 1].style.display = "block";
  testimonialcurrent++;
}

// Left arrow click
testimonialarrowLeft.addEventListener("click", function() {
  if (testimonialcurrent === 0) {
    testimonialcurrent = testimonialsliderImages.length;
  }
  testimonialslideLeft();
});

// Right arrow click
testimonialarrowRight.addEventListener("click", function() {
  if (testimonialcurrent === testimonialsliderImages.length - 1) {
    testimonialcurrent = -1;
  }
  testimonialslideRight();
});

testimonialstartSlide();

setInterval(testimonialslideRight, 5000);



// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

