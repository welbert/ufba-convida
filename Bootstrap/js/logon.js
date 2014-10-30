$(document).ready(function(){
	//function for contact form dropdown
	$("#entrar_form").open = true;
	$("#entrar_form").hide();
	function entrar() {
		if ($("#entrar_form").is(":hidden")){
			$("#entrar_form").slideDown("fast");
		}
		else{
			$("#entrar_form").slideUp("fast");  
		}
	}
	 
	//run contact form when any contact link is clicked
	$("#entrar_btn").click(function(){entrar()});
	
});