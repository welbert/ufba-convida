<?php

Class rootController Extends baseController {

	public function index() {
		$campus = new Campus;
		//----------------------------------------------------//
		$query  = $campus->selecionar("codigo,nome");
		$val 	= [] ;
		 foreach (db::getInstance()->query($query) as $row) {
		 		array_push($val, $row);
		 }
		 $this->registry->template->campus = $val;
		//----------------------------------------------------//
		 $campus = new Departamento;
		$instalacao = new Instalacao;

		$query  = $instalacao->selecionar("localidade_id,predio");
		$val 	= [] ;
		 foreach (db::getInstance()->query($query) as $row) {
		 		array_push($val, $row);
		 }

		$this->registry->template->instalacoes = $val;
		//----------------------------------------------------//



		$this->registry->template->show('root');
	}

	public function campus()
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
	    $this->registry->template->show('root');

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
	    $this->registry->template->show('root');

	}

	public function addDepartamento()
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
		
	    
	    $this->registry->template->show('root');

	}

	public function addUser()
{
	$user = new User;
	$query = "test";

	if (isset($_POST['login'])) {
		$user->setLogin($_POST['login']);
		$user->setSenha($_POST['senha']);

		$query  = $user->inserir();
		
		try {
		    //$dbh = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');
		    $dbh = db::getInstance();

		    // $stmt = $dbh->prepare($query);

		    try {
		    	$dbh->exec($query);
		        $this->registry->template->mensagem = "Cadastrado com Sucesso!";
		    } catch(PDOExecption $e) {
		        $dbh->rollback();
		        print "Error!: " . $e->getMessage() . "</br>";
		    }
		} catch( PDOExecption $e ) {
		    print "Error!: " . $e->getMessage() . "</br>";
		} 
		
		$this->registry->template->show('root');

	}
}

}

?>