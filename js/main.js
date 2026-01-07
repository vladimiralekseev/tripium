const platformSlider = new Splide( '.js-platform-slider', {
    direction: 'ttb',
    height   : '620px',
    perPage: 3,
    type   : 'loop',
    autoHeight: true,
    autoplay: true,
    arrows: false,
    pagination: false,
    speed: 2000,
    wheel: true,
    waitForTransition: true,
} );
platformSlider.on('resize', function () {
    let h = '620px';
    if ($(window).width() < 991) {
        h = '420px';
    }
    if ($(window).width() < 767) {
        h = '320px';
    }
    platformSlider.options = {
        height: h,
    };
    platformSlider.refresh()
});

platformSlider.mount();