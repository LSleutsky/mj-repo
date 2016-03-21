$(document).ready(function() {
	$(function($){
	   $("#date").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
	   $(".phones").mask("(999) 999-9999");
	   $("#tin").mask("99-9999999");
	   $("#ssn").mask("999-99-9999");
	});


	$('input,textarea').focus(function(){
	   $(this).data('placeholder', $(this).attr('placeholder'))
	   $(this).attr('placeholder','');
	});
	$('input,textarea').blur(function(){
	   $(this).attr('placeholder', $(this).data('placeholder'));
	});

});