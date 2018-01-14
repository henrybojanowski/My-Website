$(document).ready(function(){


	
	
	

	
	$('.on_or_off').hide();
	$('.hide').hide();

	//CS 111 stuff begins 
	$('.CS-111-button').mouseenter(function()
	{
		$(this).addClass('bold');
	});
	$('.CS-111-button').mouseleave(function(){
		$(this).removeClass('bold');
	});

	$('.CS-111-button').click(function(){
		$('#cs111').show();
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
		$('#cs112').show();
	});
	

	//CS-112 button stuff ends

	//EC-327 button stuff begins 

	$('.EC-327-button').mouseenter(function(){
		$(this).addClass('bold');
	});
	$('.EC-327-button').mouseleave(function(){
		$(this).removeClass('bold');
	});

	$('.EC-327-button').click(function(){
		$('#ec327').show();
	});
	
	//EC 327 button stuff ends

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
		$("#1").show();
	});

	

	
	

});

 