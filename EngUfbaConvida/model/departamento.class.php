<?php
/*
 * Classe Departamento
 */
class Departamento {
	private $nome;
	private $codigoLocalidade;
	static private $tabela = "departamento";
	
	public function inserir() {
		$sql = "insert into ".self::$tabela." ( nome, localidade_id)
				values ('".$this->nome."','".$this->codigoLocalidade."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where codigo = '".$this->codigo."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar($campos) {
		$sql = "select ".$campos." from ".self::$tabela;
		
		return $sql;
	}
	
	//*************************************************************************
	//*************************************************************************
	
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
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
}