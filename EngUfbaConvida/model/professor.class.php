<?php
/*
 * Classe Professor
 */
class Professor {
	private $academicoId;
	private $siape;
	private $senha;
	static private $tabela = "professor";
	
	public function inserir() {
		$sql = "insert into ".self::$tabela." (academico_id, siape, senha)
				values (".$this->academicoId.",".$this->siape.", '".$this->senha."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where siape = '".$this->siape."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }

	public function selecionarProfessor($condicao){
		return "select * from ".self::$tabela." where ".$condicao;
	}
	
	//*************************************************************************
	//*************************************************************************
	
	public function setAcademicoId($academicoId) {
		$this->academicoId = $academicoId;
	}
	
	public function getAcademicoId() {
		return $this->academicoId;
	}
	
	public function setSiape($newSiape) {
		$this->siape = $newSiape;
	}
	
	public function getSiape() {
		return $this->siape;
	}
	
	public function setSenha($senha) {
		$this->senha = $senha;
	}
	
	public function getSenha() {
		return $this->senha;
	}
}