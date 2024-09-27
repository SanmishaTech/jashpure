$(document).ready(function(){
    
"use strict";
// wow 
 new WOW({
     mobile: false, 
 }).init();
    
 $(".fables-mega-menu li a").click(function (){
    $(".fables-mega-menu li > div").toggleClass("show-sub");
 });
    
// 3 items carousel carousel-items-3
 $(".carousel-items-3").owlCarousel({  
     margin:20,
     loop:true,
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     responsive:{
        0:{
            items:1 
        },
        600:{
            items:2 
        },
        768:{
            items:3 
        }
         
    }
 });   
    
// 3 items carousel carousel-items-3
 $(".carousel-items-4").owlCarousel({  
     margin:20,
     autoplay:true,
     autoplayTimeout:2000,
     autoplayHoverPause:false,
     loop:true,
     nav:false,
    //  navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     responsive:{
        0:{
            items:1 
        },
        600:{
            items:1 
        },
        1000:{
            items:1 
        },
        1200:{
            items:2 
        }
    }
 });   
    

    // START TOGGLE SEARCH
    $(".open-search").click(function (e){
        e.preventDefault();
        $(".search-section").fadeIn('fast');
        $(".search-input").focus();
        $('body').css({"overflow":"hidden"});
    });
    
    $(".close-search").click(function (e){
        e.preventDefault();
        $(".search-section").fadeOut('fast');
        $('body').css({"overflow":"visible"});
    });
    
    $(document).keyup(function(e) {
    if (e.which == 27) {
        $(".search-section").fadeOut('fast');
        $('body').css({"overflow":"visible"});
    }
    
});
    
// 3 items carousel carousel-items-6
 $(".carousel-items-6").owlCarousel({  
     margin:20,
     loop:true,
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     responsive:{
        0:{
            items:1 
        },
        600:{
            items:3 
        },
        1000:{
            items:6 
        }
    }
 }); 
    
 
    
// teaser slider
 $(".blog-teaser,.default-carousel").owlCarousel({
     loop:true,  
     autoplay:true,
     dots:true,
     nav:true,
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     items:1
 });
    
// Blog Slider
    
 $(".nav-slider").owlCarousel({
     nav:true,
     loop:true,
     autoplay:true,
     autoplayTimeout:2000,
    //  autoplayHoverPause:false,
          margin:20, 
     navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>'],
     dots:false,
     responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
 });
    
 $("#blog-slider").owlCarousel({
     loop:true,
     margin:20,
     nav:false,
     navText:['<span class="fables-iconarrow-left"></span>' , '<span class="fables-iconarrow-next"></span>'],
     autoplay:true,
     dots:true,
     responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
 });


 $("#sync1").owlCarousel({
     nav:true,
     loop:true,
     autoplay:true,
     autoplayTimeout:2000,
    //  autoplayHoverPause:false,
          margin:20, 
     navText: ['<span class="fables-iconarrow-left text-white"></span>','<span class="fables-iconarrow-right  text-white"></span>'],
     dots:true,
     responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
 });
    
    
 var $input = $("#input-val");   
 $input.val(1);
    $(".calc-btn").click(function(){
        if($(this).hasClass("plus")) {
             $input.val(parseInt($input.val())+1);
        }else  if ($input.val()>=2) {
            $input.val(parseInt($input.val())-1);
        }
    });
    
$(".fables-view-btn").click(function() {
     $(this).addClass('active').siblings().removeClass('active');
    
     if($(this).hasClass("fables-list-btn")){
          $(".fables-product-block").removeClass("col-md-6 col-lg-4").addClass("list");
          $(".fables-product-img").removeClass("col-12").addClass("col-4"); 
          $(".fables-product-block .card-body").removeClass("col-12").addClass("col-8"); 
      }
    else{
          $(".fables-product-block").addClass("col-md-6 col-lg-4").removeClass("list");
          $(".fables-product-img").removeClass("col-4").addClass("col-12"); 
          $(".fables-product-block .card-body").removeClass("col-8").addClass("col-12");
    }
});
    
    
$('[data-countdown]').each(function() {
  var $this = $(this), finalDate = $(this).data('countdown');
  $this.countdown(finalDate, function(event) {
    $this.html(event.strftime('<div class="row"><div class="col-6 col-lg-3 mb-3 mb-lg-0 comming-soon-counter">%D <br> <span>Days</span></div>  <div class="col-6 col-lg-3 comming-soon-counter"> %H <br> <span>Hours</span> </div> <div class="col-6 col-lg-3 mb-3 mb-lg-0 comming-soon-counter">  %M <br> <span>Minutes</span></div> <div class="col-6 col-lg-3 mb-3 mb-lg-0 comming-soon-counter"> %S <br> <span>Seconds</span></div></div>'));
  });
});
    
  
    
    
$('#fables-testimonial-carousel').owlCarousel({
        loop:true,
        dots:true,
        margin:20,
        autoplay:true,
        items:1,
        navText: ['<span class="fables-iconarrow-left"></span>','<span class="fables-iconarrow-right"></span>']
        
        });
    
 $('#fables-partner-carousel').owlCarousel({
        loop:true,
        dots:false,
        autoplay:true,
        margin:20,
        nav:true,     
        navText:['<i class="fa fa-chevron-left fables-main-text-color fables-main-border-color fables-partner-nav-icon" aria-hidden="true"></i>' , '<i class="fa fa-chevron-right fables-main-text-color fables-main-border-color fables-partner-nav-icon" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            768:{
                items:3
            },
            1000:{
                items:4
            },
            1440:{
                items:6
            }
            }
        });
    
 


// multi event gallery timeLine
 
// $('.timeline').timelify({

//   // animation types
//   animLeft: "bounceInLeft",
//   animRight: "bounceInRight",
//   animCenter: "bounceInUp",

//   // animation speed
//   animSpeed: 1500,

//   // trigger position in pixels
//   offset: 150
  
// });


    

});

function JaMap() {
 var mapCanvas = document.getElementById("map");

data = mapCanvas.dataset;
var Zom = data.zom;
 var myCenter = new google.maps.LatLng(data.lat,data.lng);
 var mapOptions = {
 center: myCenter,
 zoom: 14,
 };
 var map = new google.maps.Map(mapCanvas,mapOptions);
 var marker = new google.maps.Marker({
   position: myCenter,
   icon: data.icon
 });
 marker.setMap(map);
}


// $(function ($) {
//     "use strict";
//        animatecounters();
//    });
//    function animatecounters() {
//        $('.timer').each(count);
//        function count(options) {
//            var $this = $(this);
//            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
//            $this.countTo(options);
//        }
//    } 


 