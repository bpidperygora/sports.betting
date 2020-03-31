let info = document.querySelector('.info_search_block');
let searchForm = info.querySelector('#searchform');

info.addEventListener('click', function (ev) {
    console.log(ev.target);
    if (ev.target.className === 'search_block'){
        searchForm.classList.toggle('show')
    }
});
