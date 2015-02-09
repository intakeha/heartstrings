$(document).ready(function(){
	
   //submission scripts
  $('#contact-form').submit( function(e){
	  	  
		//statements to validate the form	
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var email = document.getElementById('e-mail');
		if (!filter.test(email.value)) {
			$('.email-missing').css({'opacity': 1 });
		} else {$('.email-missing').css({'opacity': 0 });}
		if (document.cform.name.value == "") {
			$('.name-missing').css({'opacity': 1 });
		} else {$('.name-missing').css({'opacity': 0 });}	
		if (document.cform.message.value == "") {
			$('.message-missing').css({'opacity': 1 });
		} else {$('.message-missing').css({'opacity': 0 });}		
		if ((document.cform.name.value == "") || (!filter.test(email.value)) || (document.cform.message.value == "")){
			return false;
		} 
		
		if ((document.cform.name.value != "") && (filter.test(email.value)) && (document.cform.message.value != "")) {
		
			//show the loading bar
			$('.contact-loader').append().slideUp(600);
			
			//remove form
			$(".contact-form").slideUp(200);
		
			//send the ajax request
			$.ajax({
				type: "POST",
				url: "/contact",
				data: { name:$('#name').val(), email:$('#e-mail').val(), message:$('#message').val()}
			}).done(function( data ) {
				$('.contact-loader').append(data).slideDown(200);
			});	
			
			//stay on the page
			return false;
		}
		
		e.preventDefault();
		e.unbind();

  }); 
});