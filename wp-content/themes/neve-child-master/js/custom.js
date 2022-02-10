
$( document ).ready(function() {
   let toggle = $('.menu-mobile-toggle');
   let sidebar = $('.header-menu-sidebar');
   
   $(toggle).on('click', function() {
       
       
       if($(sidebar).css("position") === "fixed") {
      		$('.primary-menu-ul li').each(function(index, element) {
    	    	    $(element).children('a').delay(index*50).hide().fadeIn(100);
    		});
       }
   });

   $(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
        // $('header').addClass('sticky');
        $('.header-main-inner').addClass('sticky-container');
    }
    else{
        $('.header-main-inner').removeClass('sticky-container');
    }

    if($('header').hasClass('sticky')){
        $('.slider-section').addClass('padding-top');
    }else {
        $('.slider-section').removeClass('padding-top');
    }
  });

  //sidebar custom menu
  let desktopTarget = $(".sidebar-burger-menu a");

  $(desktopTarget).on('click', function(e){
        e.preventDefault();
        $(".sidebar-wrapper").toggleClass("open");
        $(".overlay_body_site").toggleClass("active");
  });

  $(".sidebar-wrapper .close-wrapper").on("click", function(e){
        e.preventDefault();
        $(".sidebar-wrapper").removeClass("open");
        $(".overlay_body_site").removeClass("active");
  });

  $(".overlay_body_site").on("click", function(){
        $(".overlay_body_site").removeClass("active");
        $(".sidebar-wrapper").removeClass("open");
  });

  $('.menu-wrapper > .dropdown.has_child .dropdown-toggle').each(function() {
    $(this).on("click", function(event) { 

         event.preventDefault();    
         $(this).parent().find(".my-dropdown-menu").toggleClass("active");
         $(this).find(".caret").toggleClass("active");
    });
   }); 

   // mobile menu
   let mobileTarget = $(".menu-mobile-toggle .navbar-toggle");

   $(mobileTarget).on('click', function(e){
        e.preventDefault();
        $(".sidebar-wrapper-mobile").toggleClass("open");
        $(".overlay_body_site").toggleClass("active");
    });

   let mobileClose = $(".sidebar-wrapper-mobile .close-wrapper");

   $(mobileClose).on("click", function(e){
        e.preventDefault();
        $(".sidebar-wrapper-mobile").removeClass("open");
        $(".overlay_body_site").removeClass("active");
    });

    $(".overlay_body_site").on("click", function(){
        $(".overlay_body_site").removeClass("active");
        $(".sidebar-wrapper-mobile").removeClass("open");
    });

    $('.mobile-menu-wrapper > .dropdown.has_child .dropdown-toggle').each(function() {
    $(this).on("click", function(event) { 
        console.log("click");
        event.preventDefault();    
        $(this).parent().find(".my-dropdown-menu").toggleClass("active");
        $(this).find(".caret").toggleClass("active");
    });
    }); 

    let offset = 100;
    let speed = 250;
    let duration = 500;
    $(window).scroll(function(){
            if ($(this).scrollTop() < offset) {
                      $('.topbutton') .fadeOut(duration);
            } else {
                      $('.topbutton') .fadeIn(duration);
            }
        });
    $('.topbutton').on('click', function(){
            $('html, body').animate({scrollTop:0}, speed);
            return false;
    });

  $('.urban-legends.owl-carousel').owlCarousel({
        loop:true,
        // center:true,
        margin:30,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });

    $('.urban-videos.owl-carousel').owlCarousel({
        loop:true,
        // center:true,
        margin:30,
        nav:false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });
    
   
   
});
