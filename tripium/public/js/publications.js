
const publicationsSlider = new Splide( '.js-publications-slider', {
    type   : 'loop',
    autoplay: true,
    arrows: false,
    speed: 4000,
    interval: 7000,
    pagination: false,
} );

// reviewSlider.on('resize', function () {
//     let p = '300px';
//     if ($(window).width() < 1200) {
//         p = '150px';
//     }
//     if ($(window).width() < 991) {
//         p = '100px';
//     }
//     if ($(window).width() < 767) {
//         p = '0px';
//     }
//     reviewSlider.options = {
//         padding: p,
//     };
//     reviewSlider.refresh()
// });

publicationsSlider.mount();
