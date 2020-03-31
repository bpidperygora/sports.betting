let checkbox = document.querySelectorAll('.wpcf7-checkbox');

for (let c = 0; c < checkbox.length; c++){
    if( checkbox[c].getElementsByTagName("input")[0].checked === true){
        checkbox[c].getElementsByClassName('wpcf7-list-item')[0].classList.add('checked');
    }
    checkbox[c].addEventListener('click', function (event) {
        if (event.target.className === "wpcf7-list-item first last checked"){
            event.target.getElementsByTagName('input')[0].checked = false;
            event.target.classList.remove('checked')
        }else {
            event.target.getElementsByTagName('input')[0].checked = true;
            event.target.classList.add('checked')
        }
    });
}

