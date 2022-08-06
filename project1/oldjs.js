$(document).ready(function(){
    $('.food-slider').slick({
       autoplay:true,
      slidesToShow:3,
      slidesToScroll:1,
      prevArrow:".prev-btn",
      nextArrow:".next-btn",
      responsive:[
         {
            breakpoint:992,
            settings:{
             slidesToShow:2,
            }
         },
         {
          breakpoint:768,
          settings:{
           slidesToShow:1,
          }
       }
      ]
 
    });
 
    $('.nav-trigger').click(function(){
       $('.site-content-wrapper').toggleClass('scaled');
    })
 });


// Countdown Timer :

(function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
  
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "08/8/",
        Deals = dayMonth + yyyy;
    
    today = mm + "/" + dd + "/" + yyyy;
    if (today > Deals) {
      Deals = dayMonth + nextYear;
    }
    //end
    
    const countDown = new Date(Deals).getTime(),
        x = setInterval(function() {    
  
          const now = new Date().getTime(),
                distance = countDown - now;
  
          document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
  
          //do something later when date is reached
          if (distance < 0) {
            document.getElementById("headline").innerText = "Heavy Deals on Your Favourite Dishes !";
            document.getElementById("countdown").style.display = "none";
            document.getElementById("content").style.display = "block";
            clearInterval(x);
          }
          //seconds
        }, 0)
    }());

// active navbar :

  const activePage = window.location.pathname;
  const navLinks = document.querySelectorAll('nav a').forEach(link => {
    if (link.href.includes(`${activePage}`)) {
    link.classList.add('active');
    }
})

// gallery ----------------

var currentSlide = 0;
const slides = document.querySelectorAll(".slide")
const dots = document.querySelectorAll('.dot')

const init = (n) => {
  slides.forEach((slide) => {
    slide.style.display = "none"
    dots.forEach((dot) => {
      dot.classList.remove("active")
    })
  })
  slides[n].style.display = "block"
  dots[n].classList.add("active")
}
document.addEventListener("DOMContentLoaded", init(currentSlide))
const next = () => {
    currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
    init(currentSlide)
  }
  
  const prev = () => {
    currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
    init(currentSlide)
  }
  
  document.querySelector(".next").addEventListener('click', next)
  document.querySelector(".prev").addEventListener('click', prev)
//   ss :- 

setInterval(() => {
    next()
  }, 5000);

  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      init(index)
      currentSlide = i
    })
  })

  