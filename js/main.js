/**
 * General JavaScript functionality for the theme (jQuery-free zone!).
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
	 * Functionality for toggling submenu items and appending icons.
	 */
	let parentMenusAll = document.querySelectorAll('.menu-item-has-children');
	let parentMenusMobile = document.querySelectorAll('#menu-mobile .menu-item-has-children');
	
	for (let i = 0; i < parentMenusAll.length; i++) {
		let arrowNode = document.createElement('i');
		arrowNode.classList.add('fas', 'fa-angle-down');
		parentMenusAll[i].insertBefore(arrowNode, parentMenusAll[i].childNodes[1]);		
	}

	for (let i = 0; i < parentMenusMobile.length; i++) {
		parentMenusMobile[i].addEventListener('click', function() {
			parentMenusMobile[i].classList.toggle('show-children');
		});	
	}

	/**
	 * Logo animate on click.
	 */
	let logo = document.querySelector('.logo img');
	logo.addEventListener('click', function() {
		logo.style.transform = 'rotate(-360deg)';
	});

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
