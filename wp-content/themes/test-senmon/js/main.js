// $(function(){
//     $("#slider").slick();
//   });


// $('#slider').slick();

$('#slider').slick({
    dots: false,
    infinite: true,
    slidesToShow: 1,
    adaptiveHeight: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1500,
    slidesToShow: 2,
    responsive: [{

        breakpoint: 1024,
        settings: {
            slidesToShow: 1,
        }
    }]
});