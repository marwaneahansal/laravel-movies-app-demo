require('./bootstrap');
console.log("ets");


    
(() => {
    console.log(document.querySelector('.playTrailer'));
    document.querySelector('.playTrailer').addEventListener('click', () => {
        document.querySelector('.trailer').classList.remove("hidden");
    });
    
    document.querySelector('.close').addEventListener('click', () => {
        document.querySelector('.trailer').classList.add("hidden");
    });
})();


