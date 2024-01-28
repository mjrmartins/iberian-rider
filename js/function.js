/* HOME */
function cookies(){
    let cookies = localStorage.getItem("cookiesExibidos");
    let modal = document.getElementById("modal1");

    if(cookies != "true"){
        modal.style.display = "block";
    }
}

function fecharCookies(){
    let modal = document.getElementById("modal1");
    modal.style.display = "none";

    localStorage.setItem("cookiesExibidos", "true");
}

function clickArrow(){
    cardbox.scrollIntoView();
}

/* RIDER INFO + MEDIA */
function abrir1(){
    let modal = document.querySelector('#janela-modal1');

    modal.classList.add('abrir');

    window.onclick = function(event) {
        if (event.target.classList.contains("close") || event.target == modal) {
            modal.classList.remove('abrir');;
        }
    }
}

function abrir2(){
    let modal = document.querySelector('#janela-modal2');

    modal.classList.add('abrir');

    window.onclick = function(event) {
        if (event.target.classList.contains("close") || event.target == modal) {
            modal.classList.remove('abrir');;
        }
    }
}

function abrir3(){
    let modal = document.querySelector('#janela-modal3');

    modal.classList.add('abrir');

    window.onclick = function(event) {
        if (event.target.classList.contains("close") || event.target == modal) {
            modal.classList.remove('abrir');;
        }
    }
}

/* TRAVEL + MOTORCYCLE */
function abrir4(){
    let modal = document.querySelector('#janela-modal4');

    modal.classList.add('abrir');

    window.onclick = function(event) {
        if (event.target.classList.contains("close") || event.target == modal) {
            modal.classList.remove('abrir');;
        }
    }
}

function abrir5(){
    let modal = document.querySelector('#janela-modal5');

    modal.classList.add('abrir');

    window.onclick = function(event) {
        if (event.target.classList.contains("close") || event.target == modal) {
            modal.classList.remove('abrir');;
        }
    }
}

function abrir6(){
    let modal = document.querySelector('#janela-modal6');

    modal.classList.add('abrir');

    window.onclick = function(event) {
        if (event.target.classList.contains("close") || event.target == modal) {
            modal.classList.remove('abrir');;
        }
    }
}