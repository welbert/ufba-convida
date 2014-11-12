    <!--Cadastro User-->

        function alteraTipoId() {
            var tipo_usuario = document.getElementById("tipo_usuario");
            var tipo_id      = document.getElementById("id_tipo_usuario");
            var curso        = document.getElementById("curso_aluno");
            
            if(tipo_usuario.value == "professor") {
                tipo_id.innerHTML = "SIAPE";
                curso.style.display = "none";
            } else if (tipo_usuario.value == "aluno") {
                tipo_id.innerHTML = "Matricula";
                curso.style.display = "block";
            }
        }
    