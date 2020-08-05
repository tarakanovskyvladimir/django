/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
} )();
( function( $ ) {
		//owl carousel
	$('#sl_about.owl-carousel').owlCarousel({
	    loop:true, margin:10, nav:true,
	    responsive:{
	        0:{ items:1 },
	        600:{ items:3 },
	        1000:{ items:4 }
	    }
	});
	
	if ($('body').hasClass('page-id-57')) {
		document.querySelector('.change-pam-view').addEventListener('click', function () {
			var pam_view_type = document.querySelector('.type-pam-view');
			var pam_src = document.querySelector('.img-pam>figure>img'); 
			if (pam_view_type.innerText.indexOf("Центр")>=0) {pam_view_type.innerHTML = "Вид памятника <br/>со стороны парка";
			pam_src.srcset = "/wp-content/uploads/2019/02/gsw036.jpg";} 
			else {pam_view_type.innerHTML = 'Вид памятника <br/>с переулка Центрального';
			pam_src.srcset = "/wp-content/uploads/2019/02/gsw030.jpg";}
		});
	}
	if (document.querySelector('#map')!=null) {
		ymaps.ready(init);    
        function init(){ 
            var myMap = new ymaps.Map("map", { center: [44.544012, 42.718307], zoom: 18}); }
	}
	if (document.querySelector('#privetstvie')!=null) {
		let current_hour = parseInt(new Date().getHours(), 10); 
		switch(current_hour) {
		  case 0: case 1: case 2: case 3: case 4: case 5:  
		    document.querySelector("#privetstvie>span").innerHTML = 'Доброй ночи'; break;
		  case 6: case 7: case 8: case 9: case 10: case 11: 
		    document.querySelector("#privetstvie>span").innerHTML = 'Доброе утро'; break;
		  case 12: case 13: case 14: case 15: case 16: case 17: 
		    document.querySelector("#privetstvie>span").innerHTML = 'Добрый день'; break;
		  case 18: case 19: case 20: case 21: case 22: case 23: 
		    document.querySelector("#privetstvie>span").innerHTML = 'Добрый вечер'; break;
		  default:
		     document.querySelector("#privetstvie>span").innerHTML = current_hour; break;
		}
		function searchReturnVet() {
		  // Declare variables
		  var filter, li, i, fio, txtValue;
		  filter = document.getElementById('search_vet').value.toUpperCase();
		  li = document.querySelector(".listReturnVet").getElementsByTagName('li');

		  // Loop through all list items, and hide those who don't match the search query
		  for (i = 0; i < li.length; i++) {
		  	fio = li[i].getElementsByTagName("h3")[0];
		    txtValue = fio.textContent || fio.innerText;
		    if (txtValue.toUpperCase().indexOf(filter) > -1) {li[i].style.display = "";} 
		    else {li[i].style.display = "none";}
		  }
		}
		document.getElementById('search_vet').addEventListener("keyup", searchReturnVet);
	}
} )( jQuery );