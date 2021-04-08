document.addEventListener("DOMContentLoaded", function() {

console.log('Привет мир!!!')

// slick slider one

$('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1, 
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    responsive:[  
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3
      }

    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }

    },
    {
    breakpoint: 769,
    settings: {
      slidesToShow: 2
    }

    },
    {
      breakpoint: 482,
      settings: {
        slidesToShow: 1
      }

    }
  ]

});


// slider two

$('.slider-two').slick({
    slidesToShow: 3,
    slidesToScroll: 1, 
    variableWidth: true,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    responsive:[  
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3
      }

    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }

    },
    {
    breakpoint: 769,
    settings: {
      slidesToShow: 2
    }

    },
    {
      breakpoint: 482,
      settings: {
        slidesToShow: 1
      }

    }
  ]

});

// home-page-slider

$('.home-page-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1, 
    // variableWidth: true,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false
    

});

	
});