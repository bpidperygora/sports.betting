let threeStepsBlock = document.querySelector('.three_steps');
let threeStepsItem = threeStepsBlock.querySelectorAll('.three_steps_content_list_item');
let threeStepsImg = threeStepsBlock.querySelectorAll('.three_steps_img');
let sliderSpeed = threeStepsBlock.dataset.speed;

threeStepsItem[0].classList.add('active');
threeStepsImg[0].classList.add('active');
for (let it = 0; it < threeStepsItem.length; it++) {
    threeStepsItem[it].setAttribute("item-pos", '' + it + '');
    threeStepsImg[it].setAttribute("item-pos", '' + it + '');
}
setInterval(function () {
    let currentItem = threeStepsBlock.querySelector('.three_steps_content_list_item.active');
    let currentImg = threeStepsBlock.querySelector('.three_steps_img.active');
    let currentSlideNum = parseInt(currentItem.getAttribute('item-pos'));
    let totalSlides = threeStepsItem.length;
    let nextSlide = parseInt(currentSlideNum + 1);

    currentItem.classList.remove('active');
    currentImg.classList.remove('active');


    if (nextSlide + 1 > totalSlides) {
        threeStepsItem[0].classList.add('active');
        threeStepsImg[0].classList.add('active');
    } else {
        for (let s = 0; s < threeStepsItem.length; s++) {
            if (parseInt(threeStepsItem[s].getAttribute('item-pos')) === nextSlide) {
                threeStepsItem[s].classList.add('active');
                threeStepsImg[s].classList.add('active');
                break;
            }
        }
    }
}, parseInt(sliderSpeed * 1000));
