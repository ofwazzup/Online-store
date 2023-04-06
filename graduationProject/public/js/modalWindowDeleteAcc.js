let modal = document.querySelector('.container__modal-window-delete-acc');
const btn = document.querySelector('.btn__delete-acc');
let closeWindow = document.getElementsByClassName('block')[0];

btn.onclick = function() {
    modal.style.display = "block";
}


closeWindow.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function() {
    if(event.target == modal) {
        modal.style.display = "none";
    }
}