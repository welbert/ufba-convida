<?php
/*
 * Classe Campus
 */
class Campus {
	private $codigoLocalidade;
	private $nome;
	private $codigo;
	static private $tabela = "campus";
	
	public function inserir() {
		$sql = "insert into ".self::$tabela."(localidade_id, nome,codigo)
				values ('".$this->codigoLocalidade."','".$this->nome."','".$this->codigo."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela."
				where codigoLocalidade = '".$this->codigoLocalidade."' and
					nome = '".$this->nome."'";
		
		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar($campos) {
		$sql = "select ".$campos." from ".self::$tabela;
		
		return $sql;
	}
	
	//*******************************************************************
	//*******************************************************************
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
	
	public function setNome($newNome) {
		$this->nome = $newNome;
	}
	
	public function getNome() {
		return $this->nome;
	}

	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
}