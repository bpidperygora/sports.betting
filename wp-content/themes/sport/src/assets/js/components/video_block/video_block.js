let videoBlock = document.getElementsByClassName('video_block')[0];
let videoOverflow = videoBlock.getElementsByClassName('video_block_overflow')[0];
let playButton = videoOverflow.getElementsByClassName('video_block_overflow_play')[0];
let pauseButton = videoBlock.getElementsByClassName('pause_ico')[0];
let video = videoBlock.getElementsByTagName('video')[0];
let pauseBlock = videoBlock.getElementsByClassName('pause')[0];

pauseButton.addEventListener('click', function () {
    if (videoBlock.classList.value === 'video_block active pause') {
        video.play();
        videoBlock.classList.remove('pause');

    } else {
        video.pause();
        videoBlock.classList.add('pause');
    }
});
playButton.addEventListener('click', function () {
    videoOverflow.style.display = 'none';
    videoBlock.classList.add('active');
    video.play();
});
videoBlock.addEventListener('mouseover', function () {
    if (videoBlock.classList.contains('active')) {
        pauseBlock.classList.add('show');
    }
});
videoBlock.addEventListener('mouseout', function () {
    if (videoBlock.classList.contains('active')) {
        pauseBlock.classList.remove('show');
    }
});
videoBlock.addEventListener('click', function () {
    if (videoBlock.classList.contains('active') && window.innerWidth < 768) {
        if (pauseBlock.classList.contains('show')) {
            setTimeout(function () {
                pauseBlock.classList.remove('show');
            }, 2000);
        }else {
            pauseBlock.classList.add('show');
            setTimeout(function () {
                pauseBlock.classList.remove('show');
            }, 2000);
        }
    }
});
