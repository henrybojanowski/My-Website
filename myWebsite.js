$(document).ready(function(){

	$('.boring_or_fun').hide();
	$('.on_or_off').hide();


	$('.CS-111-button').mouseenter(function(){
		$(this).addClass('bold');
	});
	$('.CS-111-button').mouseleave(function(){
		$(this).removeClass('bold');
	});

	$('.CS-111-button').click(function(){
		$('.boring_or_fun').show();
	});

	

	$('h1').hover(function(){
		$(this).addClass('blue');
	});


	$('.expand').mouseenter(function(){
		$(this).addClass('bold');
	});
	
	$('.expand').mouseleave(function(){
		$(this).removeClass('bold');
	});

	$('.expand').click(function(){
		$('.on_or_off').show();
	});

	

	
	

});