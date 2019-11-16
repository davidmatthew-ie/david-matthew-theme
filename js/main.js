/**
 * General JavaScript functionality for the theme.
 */

document.addEventListener('DOMContentLoaded', function() {

    /**
     * Functionality for the navbar-toggle animations.
     */
    let navToggle = document.getElementById('navbar-toggle');
    let menuIsHidden = true;
    navToggle.addEventListener('click', function() {

        let menuMobile = document.getElementById('menu-mobile');
        let navbarToggler = document.getElementById('navbar-toggle');
        let bar1 = document.querySelector('#navbar-toggle div:nth-child(1)');
        let bar2 = document.querySelector('#navbar-toggle div:nth-child(2)');
        let bar3 = document.querySelector('#navbar-toggle div:nth-child(3)');

        if (menuIsHidden) {
            menuMobile.style.left = '10%';
            navbarToggler.style.transform = 'rotate(360deg)';
            bar1.style.transform = 'translateY(15px) rotate(-45deg)';
            bar2.style.width = '0';
            bar2.style.opacity = '0';
            bar3.style.transform = 'translateY(-15px) rotate(45deg)';
        } else {
            menuMobile.style.left = '100%';
            navbarToggler.style.transform = 'rotate(0deg)';
            bar1.style.transform = 'translateY(0) rotate(0deg)';
            bar2.style.width = '80%';
            bar2.style.opacity = '1';
            bar3.style.transform = 'translateY(0) rotate(0deg)';
        }

        menuIsHidden = !menuIsHidden;
    });

    /**
     * Functionality for toggling submenu items  on mobile.
     */
    let submenus = document.querySelectorAll('.has-sub-menu');
    for (let i = 0; i < submenus.length; i++) {
        submenus[i].addEventListener('click', function() {
            submenus[i].classList.toggle('show');
        });
    }

    /**
     * Slider functionality.
     */
    const sliderExists = document.getElementById('slider');
    if (sliderExists) {
        const slider = tns({
            container: '#slider',
            items: 1,
            slideBy: 'page',
            navPosition: 'bottom',
            mouseDrag: true,
            autoplay: true,
            autoplayButtonOutput: false,
            controls: false
        });
    }

    /**
     * Set the CDN autoloader language path for Prism.
     */
    Prism.plugins.autoloader.languages_path = 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.17.1/components/';

});
