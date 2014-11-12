$(document).ready(function(){
	var buscaAvancada = $('#buscaAvancada');
	var acaobuscaAvancada = $('#acaobuscaAvancada');
	
	acaobuscaAvancada.hide();

	buscaAvancada.click(function() {
		
		if(this.checked) {
			acaobuscaAvancada.show();
		
		} else {
			acaobuscaAvancada.hide();
		}
	});

	
});