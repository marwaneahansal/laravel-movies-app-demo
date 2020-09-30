require('./bootstrap');
import 'alpinejs';

var tag = document.createElement('script');





let playTrailerElem = document.querySelector('.playTrailer');
let closeTrailerElem = document.querySelector('.close');
let iframeElem = document.getElementById("ytbPlayer");

if(playTrailerElem && closeTrailerElem) {

    var iframeSrc = iframeElem.src;
    playTrailerElem.addEventListener('click', () => {
        iframeElem.src = iframeSrc;
        document.querySelector('.trailer').classList.remove("hidden");
    });

      

    closeTrailerElem.addEventListener('click', () => {
        iframeElem.src = "";
        document.querySelector('.trailer').classList.add("hidden");
    });
    
}


