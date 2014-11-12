<?php

Class localidadeController Extends baseController {

	public function index() {
		$campus = new Campus;

		$query  = $campus->selecionar("codigo,nome");
		$val 	= [] ;
		 foreach (db::getInstance()->query($query) as $row) {
		 		array_push($val, $row);
		 }
		 $this->registry->template->campus = $val;
	    $this->registry->template->show('campus');
	}

	public function instalacao()
	{	
		$localidade = new Localidade;
		$instalacao = new Instalacao;

		/*** set a template variable ***/
		if (isset($_POST['endereco'])) {
			# code...
			$localidade->setEndereco($_POST['endereco']);

			$query = $localidade->inserir();

			$id_localidade = Executable::EXECUTE_QUERY_GET_ID(db::getInstance(),$query);

			if (isset($id_localidade)) {
	        	if (isset($_POST['instalacao'])) {
	        		$instalacao->setPredio($_POST['instalacao']);
	        		$instalacao->setCodigoCampus($_POST['campus']);
	        		$instalacao->setCodigoLocalidade($id_localidade);
	        		$query = $instalacao->inserir();

	        		Executable::EXECUTE_QUERY_GET_OBJ_PDO(db::getInstance(),$query);
	        		
	        	}
	        	$this->registry->template->mensagem = "Cadastrado com sucesso.";
				
			}else{
	        	$this->registry->template->mensagem = "Erro no cadastro";

			}
		
	    }
	    $this->registry->template->show('campus');

	}

	public function campus()
	{	
		$localidade = new Localidade;
		$campus = new Campus;
		/*** set a template variable ***/
		if (isset($_POST['endereco'])) {
			# code...
			$localidade->setEndereco($_POST['endereco']);

			$query = $localidade->inserir();

			$id_localidade = Executable::EXECUTE_QUERY_GET_ID(db::getInstance(),$query);

			if (isset($id_localidade)) {
	        	if (isset($_POST['nome'])) {
	        		$campus->setNome($_POST['nome']);
	        		$campus->setCodigo($_POST['codigo']);
	        		$campus->setCodigoLocalidade($id_localidade);
	        		$query = $campus->inserir();

	        		Executable::EXECUTE_QUERY_GET_OBJ_PDO(db::getInstance(),$query);
	        		$this->registry->template->nome= $_POST['nome'];
	        	}
	        	$this->registry->template->mensagem = "Cadastrado com sucesso.";
				
			}else{
	        	$this->registry->template->mensagem = "Erro no cadastro";

			}
		
	    }
	    $this->registry->template->show('campus');
	}
}

?>