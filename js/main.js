/**
 * General JavaScript functionality for the theme.
 */

document.addEventListener('DOMContentLoaded', function() {

    /**
     * The below code looks after the navbar toggling animations.
     */
    let navToggle = document.getElementById('navbar-toggle');
    let menuIsHidden = true;
    navToggle.addEventListener('click', function() {

        // Set our animation property values, to be used further below.
        let animEase = 'easeOutQuart';
        let animDuration = '600';
        let menuLeftPos, navRotation, bar1TransY, bar1Rotation, bar2Width, bar2Opacity, bar3TransY, bar3Rotation;

        // Initialize these values differently, depending on whether the menu is visible or off-screen.
        if (menuIsHidden) {
            menuLeftPos = '14px';
            navRotation = '360deg';
            bar1TransY = '15px';
            bar1Rotation = '-45deg';
            bar2Width = '0';
            bar2Opacity = '0';
            bar3TransY = '-15px';
            bar3Rotation = '45deg';
        } else {
            menuLeftPos = '100%';
            navRotation = '0deg';
            bar1TransY = '0';
            bar1Rotation = '0deg';
            bar2Width = '80%';
            bar2Opacity = '1';
            bar3TransY = '0';
            bar3Rotation = '0deg';
        }

        // Begin the anime.js functions.
        anime({ targets: '#menu-mobile', left: menuLeftPos, easing: animEase, duration: animDuration });
        anime({ targets: '#navbar-toggle', rotate: navRotation, easing: animEase, duration: animDuration });
        anime({ targets: '#navbar-toggle div:nth-child(1)', translateY: bar1TransY, rotate: bar1Rotation, easing: animEase, duration: animDuration });
        anime({ targets: '#navbar-toggle div:nth-child(2)', width: bar2Width, opacity: bar2Opacity, easing: animEase, duration: animDuration });
        anime({ targets: '#navbar-toggle div:nth-child(3)', translateY: bar3TransY, rotate: bar3Rotation, easing: animEase, duration: animDuration });

        // Set the menu display boolean to its opposite.
        menuIsHidden = !menuIsHidden; 
    });
});
