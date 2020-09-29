require('./bootstrap');
import 'alpinejs';


let playTrailer = document.querySelector('.playTrailer');
let closeTrailer = document.querySelector('.close');

if(playTrailer && closeTrailer) {
    playTrailer.addEventListener('click', () => {
        document.querySelector('.trailer').classList.remove("hidden");
    });
    
    closeTrailer.addEventListener('click', () => {
        document.querySelector('.trailer').classList.add("hidden");
    });
    
}


