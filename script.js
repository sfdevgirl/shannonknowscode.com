 $(document).ready(function(){
 	$('footer').hide();
	$('.btn').on("click", function(){
		$('.index').hide();
		$('.glass').show();
		$('.resume').show();
		$('.btn').hide();
		$('.about').hide();
		$('.contact-me').hide();
		$('.masthead.clearfix').show();
		$('footer').show();
	});
	$('.port').on("click", function(){
		$('.resume').show();
		$('.glass').show();
		$('.about').hide();
		$('.contact-me').hide();
		$('footer').show();
		$('.barnav li:nth-child(1)').addClass('active');
		$('.barnav li:nth-child(2)').removeClass('active');
		$('.barnav li:nth-child(3)').removeClass('active');
		$('.masthead-brand').html("Portfolio");
	});
	$('.mine').on("click", function(){
		$('.resume').hide();
		$('.glass').show();
		$('.about').show();
		$('.contact-me').hide();
		$('.scroll').hide();
		$('.masthead-brand').html("About Me");
		$('.barnav li:nth-child(1)').removeClass('active');
		$('.barnav li:nth-child(2)').addClass('active');
		$('.barnav li:nth-child(3)').removeClass('active');
		$('footer').show();
	});
	$('.con').on("click", function(){
		$('div.scroll.glass').hide();
		$('div .scroll').hide();
		$('.scroll').hide();
		$('.resume').hide();
		$('.about').hide();
		$('.contact-me').show();
		$('footer').show();
		$('.masthead-brand').html("Contact");
		$('.barnav li:nth-child(1)').removeClass('active');
		$('.barnav li:nth-child(2)').removeClass('active');
		$('.barnav li:nth-child(3)').addClass('active');
		
	});
});