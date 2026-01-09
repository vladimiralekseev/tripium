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


const reviewSlider = new Splide( '.js-review-slider', {
    type   : 'loop',
    padding: '300px',
    pagination: false,
} );

reviewSlider.on('resize', function () {
    let p = '300px';
    if ($(window).width() < 1200) {
        p = '150px';
    }
    if ($(window).width() < 991) {
        p = '100px';
    }
    if ($(window).width() < 767) {
        p = '0px';
    }
    reviewSlider.options = {
        padding: p,
    };
    reviewSlider.refresh()
});

function updateSlideCounter() {
    const currentSlideElm = document.getElementById('review-current-slide');
    const totalSlidesElm = document.getElementById('review-total-slides');
    currentSlideElm.textContent = reviewSlider.index + 1;
    totalSlidesElm.textContent = reviewSlider.length;
}

reviewSlider.on('move', updateSlideCounter);
reviewSlider.mount();
updateSlideCounter();