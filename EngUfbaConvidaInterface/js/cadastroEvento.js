
$(document).ready(
			function add_atividade() {
				if(confirm("Você irá adicionar uma nova atividade. Continuar?")) {
					var form_atividades  = document.getElementById("form_atividades");
					var novas_atividades = document.getElementById("novas_atividades");
	
					novas_atividades.innerHTML += form_atividades.innerHTML;
				}
			}

			function add_apoiador() {
				if(confirm("Você irá adicionar um novo apoiador. Continuar?")) {
					var form_apoiadores  = document.getElementById("form_apoiadores");
					var novos_apoiadores = document.getElementById("novos_apoiadores");

					novos_apoiadores.innerHTML += form_apoiadores.innerHTML;
				}
			}
);