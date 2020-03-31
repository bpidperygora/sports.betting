function trackScroll() {
    var goTopBtn = document.getElementById('back_to_top');
    var scrolled = window.pageYOffset;
    var coords = document.documentElement.clientHeight;

    if (scrolled > coords) {
        goTopBtn.classList.add('back_to_top-show');
    }
    if (scrolled < coords) {
        goTopBtn.classList.remove('back_to_top-show');
    }
}

var timeOut;


function scrollToTop() {

    if (document.body.scrollTop != 0 || document.documentElement.scrollTop != 0) {
        window.scrollBy(0, -150);
        timeOut = setTimeout('scrollToTop()', 3);
    } else clearTimeout(timeOut);
}

window.addEventListener('scroll', trackScroll);

