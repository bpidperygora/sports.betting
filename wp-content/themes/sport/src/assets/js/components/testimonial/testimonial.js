let slider = document.getElementById('testimonial');
let items = '.testimonial_item';
let controls = document.querySelector('.slider-control');
let speed = slider.dataset.speed;
function List(name) {
    return (
        document.querySelectorAll(name)
    )
}


for (let it = 0; it < List(items).length; it++) {
    List(items)[it].setAttribute("item-pos", '' + it + '');
}

List(items)[0].classList.add('active');

controls.addEventListener('click', function (event) {
    let totalSlides = List(items).length;
    let currentSlide = document.querySelector('.testimonial_item.active');
    let currentSlideNum = parseInt(currentSlide.getAttribute('item-pos'));
    let nextSlide = parseInt(currentSlideNum + 1);
    let prevSlide = parseInt(currentSlideNum - 1);

    function checkSlide(list, setAttr, setFor, ifOption, ifArgument) {
        currentSlide.classList.remove('active');
        if (ifOption) {
            List(items)[ifArgument].classList.add('active');
        } else {
            for (let s = 0; s < list.length; s++) {
                if (parseInt(list[s].getAttribute(setAttr)) === setFor) {
                    List(items)[s].classList.add('active');
                    break;
                }
            }
        }
    }

    if (event.target.className === 'control_arrow prev_arrow') {
        checkSlide(List(items), 'item-pos', prevSlide, prevSlide < 0, totalSlides - 1)
    } else {
        checkSlide(List(items), 'item-pos', nextSlide, nextSlide + 1 > totalSlides, 0)
    }
});


setInterval(function () {
    eventEmulation(controls.getElementsByClassName('next_arrow')[0], 'click');
}, parseInt(speed * 1000));