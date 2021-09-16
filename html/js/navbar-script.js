const navToggle = document.querySelector('.nav-toggle')
const navMenu = document.querySelector('.nav-menu')


navToggle.addEventListener ('click', () => {
    navMenu.classList.toggle('nav-menu_visible'); 
    //se llama la clase del css sin el punto.

    //------para las personas otras formas de usar los dispositivos.


    if(navMenu.classList.contains('nav-menu_visible')){
        navToggle.setAttribute('aria-label','Close the Menu!');

    }else{
        navToggle.setAttribute('aria-label','Open the Menu');
    }


});