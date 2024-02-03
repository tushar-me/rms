

$('.hero-items').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    prevArrow:".hero-slider-prev-button",
    nextArrow:".hero-slider-next-button"
});



$('.client-items').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow:".client-slider-prev-button",
    nextArrow:".client-slider-next-button",
    responsive: [
        {
        breakpoint: 1024,
        settings: {

            slidesToShow: 3,
            infinite: true,
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 1,
        }
        }
    ]
});



$('.brand-items').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow:".client-slider-prev-button",
    nextArrow:".client-slider-next-button",
    responsive: [
        {
        breakpoint: 1024,
        settings: {

            slidesToShow: 3,
            infinite: true,
        }
        },
        {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
        }
        },
        {
        breakpoint: 480,
        settings: {
            slidesToShow: 2,
        }
        }
    ]
});
