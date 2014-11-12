<?php
/*
 * Classe Academico
 */
 class Academico {
	private $id;
	private $nome;
	private $endereco;
	private $dataNascimento;
	private $telefone;
	private $codigoDepartamento;
	private $email;
	private static $tabela = "academico";
	
	public function inserir() {
		$sql = "insert into ".self::$tabela." (nome, endereco, data_nascimento,
				telefone, departamento_id, email) values ('".$this->nome."','".$this->endereco."',
				'".$this->dataNascimento."','".$this->telefone."','".$this->codigoDepartamento."',
				'".$this->email."')";
	
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where codigo = '".$this->codigo."'";
		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*******************************************************************
	//*******************************************************************
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setNome($newNome) {
		$this->nome = $newNome;
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function setEndereco($newEndereco) {
		$this->endereco = $newEndereco;
	}
	
	public function getEndereco() {
		return $this->endereco;
	}
	
	public function setDataNascimento($newDataNascimento) {
		$this->dataNascimento = $newDataNascimento;
	}
	
	public function getDataNascimento() {
		return $this->dataNascimento;
	}
	
	public function setTelefone($newTelefone) {
		$this->telefone = $newTelefone;
	}
	
	public function getTelefone() {
		return $this->telefone;
	}
	
	public function setCodigoDepartamento($newCodigoDepartamento) {
		$this->codigoDepartamento = $newCodigoDepartamento;
	}
	
	public function getCodigoDepartamento() {
		return $this->codigoDepartamento;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getEmail() {
		return $this->email;
	}
}