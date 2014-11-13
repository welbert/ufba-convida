<?php

Class indexController Extends baseController {

	public function index() {
		$departamentos = new Departamento;
		$campus 	   = new Campus;
		$instalacao	   = new Instalacao;
		$eventos 	   = new Evento;
		$atividade 	   = new Atividade;
		
		#########################################################
		
		$query  = $departamentos->selecionar("id, nome");
		$val 	= [] ;
		
		foreach (db::getInstance()->query($query) as $row) {
			array_push($val, $row);
		}
		$this->registry->template->departamentos = $val;
		
		#########################################################
		
		$query  = $instalacao->selecionar("localidade_id, predio");
		$val 	= [] ;
		
		foreach (db::getInstance()->query($query) as $row) {
			array_push($val, $row);
		}
		$this->registry->template->instalacoes = $val;
		
		#########################################################
		
		$query  = $campus->selecionar("codigo, nome");
		$val    = [];
		
		foreach (db::getInstance()->query($query) as $row) {
			array_push($val, $row);
		}
		$this->registry->template->todos_campus = $val;
		
		#########################################################
		
		$list = [];
		$query = $eventos->selecionaTodos();

		foreach (db::getInstance()->query($query) as $raw) {
			array_push($list, $raw);
		}

		$this->registry->template->listaEventos = $list;

		#########################################################

		$listA = [];
		$query = $atividade->selecionaTodas();

		foreach (db::getInstance()->query($query) as $raw) {
			array_push($listA, $raw);
		}

		$this->registry->template->listaAtividades = $listA;

		#########################################################
		
		$this->registry->template->show('index');
	}

	public function add()
	{
		if(isset($_POST['cadastrar_novo_usuario']) && (stristr($_POST['cadastrar_novo_usuario'],"cadastrar"))) {
			$academico = new Academico;
			
			$data2 = $_POST['data_nascimento'];
			$data2 = explode("/", $data2);
			
			// verifica se eh um professor ou aluno
			if (stristr($_POST['tipo_usuario'], "professor"))
				$professor = new Professor;
			if (stristr($_POST['tipo_usuario'], "aluno"))
				$aluno = new Aluno;
			
			$academico->setNome($_POST['nome_completo']);
			$academico->setEndereco($_POST['endereco']);
			$academico->setDataNascimento($data2[0]);
			$academico->setTelefone($_POST['telefone']);
			$academico->setCodigoDepartamento($_POST['departamento']);
			$academico->setEmail($_POST['email']);
			
			try {
				$id = Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $academico->inserir());
				
				$this->registry->template->mensagem = "Ultimo id: ".$id;
				
				if(isset($professor)) {
					$professor->setSiape($_POST['identificador']);
					$professor->setSenha($_POST['senha']);
					$professor->setAcademicoId($id);
					
					Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $professor->inserir());
					
				} else if(isset($aluno)) {
					$aluno->setMatricula($_POST['identificador']);
					$aluno->setCurso($_POST['curso']);
					$aluno->setSenha($_POST['senha']);
					$aluno->setAcademicoId($id);
					
					Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $aluno->inserir());
				}
				
			}catch (PDOException $e) {
				print "Error!: " . $e->getMessage() . "</br>";
			}
			
		} else {
			$this->registry->template->mensagem = "form ERROR 1";
		}
		
		$this->registry->template->show('index');
	}
	
	public function addEvento()
	{
		$evento 	= new Evento;
		$atividade  = new Atividade;
		$apoio 		= new Apoio;
	
		$data_inicio_evento = explode("/", $_POST['data_inicio_evento']);
		$data_fim_evento    = explode("/", $_POST['data_fim_evento']);
	
		##################################
		
		$evento->setTitulo($_POST['titulo_evento']);
		$evento->setCartaz($_FILES['cartaz_evento']['name']);
		$evento->setLink($_POST['link_evento']);
		$evento->setInicio($data_inicio_evento[0]);
		$evento->setFim($data_fim_evento[0]);
		$evento->setDescricao($_POST['descricao_evento']);
		$evento->setAcademicoId(1);

		try {
			##################################
				
			# insere os eventos na base
			$id_evento = Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $evento->add());
			
			$nome_diretorio = 'public/'.md5($id_evento);
			mkdir($nome_diretorio, 0777, true);
			
			move_uploaded_file($_FILES['cartaz_evento']['tmp_name'],
			$nome_diretorio.'/'.$_FILES['cartaz_evento']['name']);
				
			################################################################################################
				
			for($i = 0; $i < sizeof($_POST['titulo_atividade']); $i++) {
				if(isset($_POST['titulo_atividade'][$i]) && !empty($_POST['titulo_atividade'][$i])) {
						
					$atividade->setTitulo($_POST['titulo_atividade'][$i]);
					$atividade->setData($_POST['data_atividade'][$i]);
					$atividade->setHorario($_POST['horario_atividade'][$i]);
					$atividade->setDescricao($_POST['descricao_atividade'][$i]);
					$atividade->setCodigoEvento($id_evento);
						
					try {
						$id_atividade = Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $atividade->add());
					} catch(PDOException $e) {
						print "Erro ".$e->getMessage()."<br/>";
					}
				}	
			}
		
			################################################################################################
			
			mkdir('public/apoio', 0777, true);
				
			for($i = 0; $i < sizeof($_POST['nome_apoiador']); $i++) {
				$url_img_apoiador = $_FILES['imagem_apoiador']['name'][$i];
		
				move_uploaded_file($_FILES['imagem_apoiador']['tmp_name'][$i], $url_img_apoiador);
		
				$apoio->setNome($_POST['nome_apoiador'][$i]);
				$apoio->setUrlImg($url_img_apoiador);
				$apoio->setCodigoEvento($id_evento);
		
				try {
					Executable::EXECUTE_QUERY_GET_ID(db::getInstance(), $apoio->add());
				} catch(PDOException $e) {
					print "Erro ".$e->getMessage()."<br/>";
				}
			}

		} catch(PDOException $e) {
			print "Erro ".$e->getMessage()."<br/>";
		}

		$this->index();
		$this->registry->template->show('index');
	}


	public function busca() {
		if(isset($_GET)) {
			$evento = new Evento;

			$query = $evento->selecionarTexto($_GET['buscaLivre']);

			$busca = [];

			foreach ($db::getInstance()->query($query) as $value) {
				array_push($busca, $value);
			}

			$this->registry->template->listaEventos = $busca;
		}
		$this->registry->template->show('index');
	}
}

?>
