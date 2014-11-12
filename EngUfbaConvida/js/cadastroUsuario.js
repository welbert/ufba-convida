$(document).ready(function(){
	var userProfessor = $('#userProfessor');
	var acaoProfessor = $('#acaoProfessor');
	var userAluno = $('#userAluno');
	var acaoAluno = $('#acaoAluno');
	
	
	acaoAluno.hide();
	acaoProfessor.hide();

	userProfessor.click(function() {
		userAluno.attr("checked",false);
		//document.getElementById("userAluno").checked = false;
		if(this.checked) {
			acaoProfessor.show();
			acaoAluno.hide();
		} else {
			acaoProfessor.hide();
		}
	});

	userAluno.click(function() {
		userProfessor.attr("checked",false);
		//document.getElementById("userProfessor").checked = false;
		if(this.checked) {
			acaoAluno.show();
			acaoProfessor.hide();
		} else {
			acaoAluno.hide();
		}
	});

});