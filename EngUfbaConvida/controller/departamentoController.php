<?php

Class departamentoController Extends baseController {

	public function index() {
		$campus = new Departamento;
		$instalacao = new Instalacao;

		$query  = $instalacao->selecionar("localidade_id,predio");
		$val 	= [] ;
		 foreach (db::getInstance()->query($query) as $row) {
		 		array_push($val, $row);
		 }

		$this->registry->template->instalacoes = $val;
	    $this->registry->template->show('departamento');
	}

	public function add()
	{	
		$departamento = new Departamento;

		/*** set a template variable ***/
		if (isset($_POST['instalacao'])) {
			# code...
			$departamento->setCodigoLocalidade($_POST['instalacao']);
			$departamento->setNome($_POST['nome']);

			$query = $departamento->inserir();

			var_dump($_POST);

			Executable::EXECUTE_QUERY_GET_ID(db::getInstance(),$query);

			
	        $this->registry->template->mensagem = "Cadastrado com sucesso.";
				
		}
		else{
        	$this->registry->template->mensagem = "Erro no cadastro";

		}
		
	    
	    $this->registry->template->show('departamento');

	}
}