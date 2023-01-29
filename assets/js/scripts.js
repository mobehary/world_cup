$(function(){
    new WOW().init(); 
  });


$('.squad .owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false,
        }
    }
});

$('.thropy-owl .owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:false,
            loop:true,
            autoplay:true,
            autoplayTimeout:2500,
            autoplayHoverPause:true
        }
    }
});
$('.statistics-owl .owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:4,
            nav:false,
            loop:false,
        }
    }
});

$('.popup-gallery').magnificPopup({
    type: 'image',
});

$('.popup-vimeo').magnificPopup({
    disableOn:320,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
});