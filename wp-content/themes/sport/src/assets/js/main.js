// Get IE or Edge browser version

var version = detectIE();

function detectIE() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }
    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }
    return false;
}

// Add comma to number

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Click emulate
function eventEmulation(el, etype) {
    var event;
    if (document.createEvent) {
        event = document.createEvent("HTMLEvents");
        event.initEvent(etype, true, true);
    } else {
        event = document.createEventObject();
        event.eventType = etype;
    }

    event.eventName = etype;

    if (el.dispatchEvent) {
        el.dispatchEvent(event);
    } else {
        el.fireEvent("on" + etype, event);
    }
}

// fix IE button Bug
if (version === 11) {
    let button = document.querySelectorAll('button > a');

    for (let a = 0; a < button.length; a++) {
        button[a].parentNode.addEventListener('click', function () {
            eventEmulation(this.querySelector('a'), 'click')
        })
    }
}

// mobile menu button options

let menuButton = document.getElementsByClassName('navbar-toggler');

menuButton[0].addEventListener('click', function () {
    document.getElementById('navbar').classList.toggle('active');
    document.body.classList.toggle('menu_active');
});

// Accordion + Footer Mob Accordion

let footerAccordion = document.getElementsByClassName('footer_main_content')[0];

if (window.innerWidth <= 767) {
    footerAccordion.classList.add('accordion');
}

let accordion = document.querySelectorAll('.accordion');

window.addEventListener('resize', function () {
    if (window.innerWidth <= 767) {
        footerAccordion.classList.add('accordion');
        accordion = document.querySelectorAll('.accordion');
    } else {
        if (footerAccordion.classList.contains('accordion')) {
            for (let l = 0; l < document.querySelectorAll('.footer_nav_content').length; l++) {
                document.querySelectorAll('.footer_nav_content')[l].style.display = '';
            }
            footerAccordion.classList.remove('accordion');
        }
    }
});

let accordionBlock = document.querySelectorAll('.accordion_block');

for (let a = 0; a < accordionBlock.length; a++) {
    accordionBlock[a].addEventListener('click', function (ev) {
        let accordionItems = ev.target.parentNode.children;
        if (ev.target.className.indexOf('accordion_item') >= 0) {
            if (ev.target.parentNode.className.indexOf('accordion') >= 0) {
                if (ev.target.className.indexOf('active') >= 0) {
                    slideUp(ev.target.children[1], 500);
                    ev.target.classList.remove('active');
                    ev.target.children[0].classList.remove('active');
                } else {
                    for (let ai = 0; ai < accordionItems.length; ai++) {
                        if (accordionItems[ai].className.indexOf('active') >= 0) {
                            slideUp(accordionItems[ai].children[1], 500);
                            accordionItems[ai].classList.remove('active');
                            accordionItems[ai].children[0].classList.remove('active');
                            break;
                        }
                    }
                    slideDown(ev.target.children[1], 500);
                    ev.target.classList.add('active');
                    ev.target.children[0].classList.add('active');
                }
            }
        }
    })
}

// Pur JS animation

function slideUp(target, duration) {
    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.boxSizing = 'border-box';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout(function () {
        target.style.display = 'none';
        target.style.removeProperty('height');
        target.style.removeProperty('padding-top');
        target.style.removeProperty('padding-bottom');
        target.style.removeProperty('margin-top');
        target.style.removeProperty('margin-bottom');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
    }, duration);
}

function slideDown(target, duration) {
    target.style.removeProperty('display');
    let display = window.getComputedStyle(target).display;

    if (display === 'none')
        display = 'block';

    target.style.display = display;
    let height = target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.boxSizing = 'border-box';
    target.style.transitionProperty = "height, margin, padding";
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    window.setTimeout(function () {
        target.style.removeProperty('height');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
    }, duration);
}
