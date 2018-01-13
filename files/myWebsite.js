$(document).ready(function(){

	$('.boring_or_fun').hide();
	$('.boring_or_funny').hide();
	$('.on_or_off').hide();

	//CS 111 stuff begins 
	$('.CS-111-button').mouseenter(function(){
		$(this).addClass('bold');
	});
	$('.CS-111-button').mouseleave(function(){
		$(this).removeClass('bold');
	});

	$('.CS-111-button').click(function(){
		$('.boring_or_fun').show();
	});

	//CS 111 stuff ends 

	//CS-112 button stuff begins

	$('.CS-112-button').mouseenter(function(){
		$(this).addClass('bold');
	});
	$('.CS-112-button').mouseleave(function(){
		$(this).removeClass('bold');
	});

	$('.CS-112-button').click(function(){
		$('.boring_or_funny').show();
	});
	

	//CS-112 button stuff ends

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

 