/*Header part search bar javascript code*/
$(document).ready(function(){
    $('.header_icon').click(function(){
       $('.header_search').toggleClass('active')
    })
})

/*Top body text slider javascript code*/
            var TxtRotate = function(el, toRotate, period) {
              this.toRotate = toRotate;
              this.el = el;
              this.loopNum = 0;
              this.period = parseInt(period, 10) || 2000;
              this.txt = '';
              this.tick();
              this.isDeleting = false;
            };

            TxtRotate.prototype.tick = function() {
              var i = this.loopNum % this.toRotate.length;
              var fullTxt = this.toRotate[i];

              if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
              } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
              }

              this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

              var that = this;
              var delta = 300 - Math.random() * 100;

              if (this.isDeleting) { delta /= 2; }

              if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
              } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
              }

              setTimeout(function() {
                that.tick();
              }, delta);
            };

            window.onload = function() {
              var elements = document.getElementsByClassName('txt-rotate');
              for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                  new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
              }
              // INJECT CSS
              var css = document.createElement("style");
              css.type = "text/css";
              css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
              document.body.appendChild(css);
            };

/* Client Project Countdown javascript code */   

        let valueDisplays = document.querySelectorAll(".num");
        let interval = 4000;

        valueDisplays.forEach((valueDisplay) => {
          let startValue = 0;
          let endValue = parseInt(valueDisplay.getAttribute("data-val"));
          let duration = Math.floor(interval / endValue);
          let counter = setInterval(function () {
            startValue += 1;
            valueDisplay.textContent = startValue;
            if (startValue == endValue) {
              clearInterval(counter);
            }
          }, duration);
        }); 

/*success storis slider part javascript code  */  

      $(document).ready(function(){

   
        if($('.bbb_viewed_slider').length)
        {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel(
            {
                loop:true,
                margin:30,
                autoplay:true,
                autoplayTimeout:3000,
                nav:false,
                dots:false,
                responsive:
                {
                    0:{items:1},
                    575:{items:2},
                    768:{items:3},
                    991:{items:3},
                    1199:{items:4},
                    1399:{items:4}
                }
            });

            if($('.bbb_viewed_prev').length)
            {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function()
                {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.bbb_viewed_next').length)
            {
                var next = $('.bbb_viewed_next');
                next.on('click', function()
                {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });

/*Top Awards slider part javascript code*/
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
   loop:true,
    margin:10,
    nav:true,
   autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    center: true,
    navText: [
       "<i class='fas fa-angle-left'></i>",
       "<i class='fas fa-angle-right'></i>"
   ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
  });
});

/* Analog Canvas Clock  part javascript code*/

const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");
let radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  const grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(let num = 1; num < 13; num++){
    let ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    const now = new Date();
    let hour = now.getHours();
    let minute = now.getMinutes();
    let second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}

/* Analog Clock  part javascript code*/

// Get references to DOM elements
const body = document.querySelector("body"),
  hourHand = document.querySelector(".hour"),
  minuteHand = document.querySelector(".minute"),
  secondHand = document.querySelector(".second"),
  modeSwitch = document.querySelector(".mode-switch");

// check if the mode is already set to "Dark Mode" in localStorage
if (localStorage.getItem("mode") === "Dark Mode") {
  // add "dark" class to body and set modeSwitch text to "Light Mode"
  body.classList.add("dark");
}

// add a click event listener to modeSwitch
modeSwitch.addEventListener("click", () => {
  // toggle the "dark" class on the body element
  body.classList.toggle("dark");
  // check if the "dark" class is currently present on the body element
  const isDarkMode = body.classList.contains("dark");
  // set modeSwitch text based on "dark" class presence
  modeSwitch.textContent = isDarkMode ? "Light Mode" : "Dark Mode";
  // set localStorage "mode" item based on "dark" class presence
  localStorage.setItem("mode", isDarkMode ? "Dark Mode" : "Light Mode");
});

const updateTime = () => {
  // Get current time and calculate degrees for clock hands
  let date = new Date(),
    secToDeg = (date.getSeconds() / 60) * 360,
    minToDeg = (date.getMinutes() / 60) * 360,
    hrToDeg = (date.getHours() / 12) * 360;

  // Rotate the clock hands to the appropriate degree based on the current time
  secondHand.style.transform = `rotate(${secToDeg}deg)`;
  minuteHand.style.transform = `rotate(${minToDeg}deg)`;
  hourHand.style.transform = `rotate(${hrToDeg}deg)`;
};

// call updateTime to set clock hands every second
setInterval(updateTime, 1000);

//call updateTime function on page load
updateTime();
