<?php
/*
 * Classe Aluno
 */
class Aluno {
	private $academicoId;
	private $matricula;
	private $curso;
	private $senha;
	static private $tabela = "aluno";
	
	public function inserir() {
		$sql = "insert into ".self::$tabela." (academico_id, matricula, curso, senha)
		values (".$this->academicoId.", '".$this->matricula."', '".$this->curso."',
				'".$this->senha."')";
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where academico_id = '".$this->academicoId."'";
	}
	
	public function selecionarAluno($condicao){
		return "select * from ".self::$tabela." where ".$condicao;
	}
	//*******************************************************************
	//*******************************************************************
	
	public function setAcademicoId($academicoId) {
		$this->academicoId = $academicoId;
	}
	
	public function getAcademicoId() {
		return $this->academicoId;
	}
	
	public function setMatricula($newMatricula) {
		$this->matricula = $newMatricula;
	}
	
	public function getMatricula() {
		return $this->matricula;
	}
	
	public function setCurso($newCurso) {
		$this->curso = $newCurso;
	}
	
	public function getCurso() {
		return $this->curso;
	}
	
	public function setSenha($senha) {
		$this->senha = $senha;
	}
	
	public function getSenha() {
		return $this->senha;
	}
}