$('.js-menu-open').on('click', () => {
    $('body').addClass('menu-opened')
});
$('.js-menu-close').on('click', () => {
    $('body').removeClass('menu-opened')
});
$('.js-header-menu a').on('click', () => {
    $('body').removeClass('menu-opened')
});
