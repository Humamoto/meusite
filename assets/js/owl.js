//Sort random function and autoplay carousel
var owl = $('.owl-carousel');
owl.owlCarousel({
    onInitialize: function (element) {
        owl.children().sort(function () {
            return Math.round(Math.random()) - 0.5;
        }).each(function () {
            $(this).appendTo(owl);
        });
    },
    loop: true,
    dots: false,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: true,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            dots: false
        },
        600: {
            items: 3,
            dots: false
        },
        1200: {
            items: 6
        }
    }
});

