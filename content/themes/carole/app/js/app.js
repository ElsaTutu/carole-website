var app = {
  init: function() {
    console.log('init');
    
    
    // slideshow
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active-dot", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active-dot";
        setTimeout(showSlides, 5000); // Change image every 5 seconds
    };
   
  },

  activeLink: function(){
            // this will get the full URL at the address bar
            var url = window.location.href; 

            // passes on every "a" tag 
            $("#sub-header a").each(function() {
                    // checks if its the same on the address bar
                if(url == (this.href)) { 
                    $(this).closest("li").addClass("active");
                }
            });
        }

        
};

// burger menu
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

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
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };


    /*Scroll to top when arrow up clicked BEGIN*/
        // $(window).scroll(function() {
        //     var height = $(window).scrollTop();
        //     if (height > 100) {
        //         $('#back2Top').fadeIn();
        //     } else {
        //         $('#back2Top').fadeOut();
        //     }
        // });
        // $(document).ready(function() {
        //     $("#back2Top").click(function(event) {
        //         event.preventDefault();
        //         $("html, body").animate({ scrollTop: 0 }, "slow");
        //         return false;
        //     });

        // });

        // function to select the current link into the menu
        // https://stackoverflow.com/questions/10646775/active-menu-highlight-css 

        

      


$(app.init);
$(app.slideshow); 
$(app.activeLink);  