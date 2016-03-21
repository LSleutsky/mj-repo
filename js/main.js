
// Fireup the plugins
$(document).ready(function(){
	
	// initialise  slideshow
	$('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
    });

	 // capitalize the first letter of <textarea>
	// $('textarea').on('keydown', function(event) {
 //        if (this.selectionStart == 0 && event.keyCode >= 65 && event.keyCode <= 90 && !(event.shiftKey) && !(event.ctrlKey) && !(event.metaKey) && !(event.altKey)) {
 //           var $t = $(this);
 //           event.preventDefault();
 //           var char = String.fromCharCode(event.keyCode);
 //           $t.val(char + $t.val().slice(this.selectionEnd));
 //           this.setSelectionRange(1,1);
 //        }
 //    });

// sticky sidebar

$(function(){ 
  if (!!$('#sidescroll').offset()) { 
    var stickyTop = $('#sidescroll').offset().top;
	    $(window).scroll(function(){
	      var windowTop = $(window).scrollTop();
	      if (stickyTop < windowTop){
		      $('#sidescroll').css({ position: 'fixed', top: -20 });
	      } else {
		        $('#sidescroll').css('position','static');
		    }
		    });
		  }
});

// end sticky sidebar

// make "Back To Top" appear after a certain amount of scrolling - START
$(document).scroll(function () {
    var x = $(document).scrollTop();
    if (x > 450) {
        $('#bottom_menu').slideDown();
    } else {
        $('#bottom_menu').slideUp();
    }
});
// make "Back To Top" appear after a certain amount of scrolling - END

});

/**
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var button = document.getElementById( 'topnav' ).getElementsByTagName( 'div' )[0],
	    menu   = document.getElementById( 'topnav' ).getElementsByTagName( 'ul' )[0];

	if ( undefined === button )
		return false;

	// Hide button if menu is missing or empty.
	if ( undefined === menu || ! menu.childNodes.length ) {
		button.style.display = 'none';
		return false;
	}

	button.onclick = function() {
		if ( -1 == menu.className.indexOf( 'srt-menu' ) )
			menu.className = 'srt-menu';

		if ( -1 != button.className.indexOf( 'toggled-on' ) ) {
			button.className = button.className.replace( ' toggled-on', '' );
			menu.className = menu.className.replace( ' toggled-on', '' );
		} else {
			button.className += ' toggled-on';
			menu.className += ' toggled-on';
		}
	};
} )();
