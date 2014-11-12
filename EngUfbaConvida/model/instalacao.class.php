<?php
/*
 * Classe Instalacao
 */
class Instalacao {
	private $codigoLocalidade;
	private $predio;
	private $codigoCampus;
	static private $tabela = "instalacao";
	
	public function inserir() {
		$sql = "insert into ".self::$tabela." (localidade_id, predio,campus_codigo) values ('".$this->codigoLocalidade."','".$this->predio."','".$this->codigoCampus."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela."
				where codigoLocalidade = '".$this->codigoLocalidade."' and
					predio = '".$this->predio."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar($campos) {
		$sql = "select ".$campos." from ".self::$tabela;
		
		return $sql;
	}
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
	
	public function setPredio($newPredio) {
		$this->predio = $newPredio;
	}
	
	public function getPredio() {
		return $this->predio;
	}

	public function setCodigoCampus($newCodigoCampus) {
		$this->codigoCampus = $newCodigoCampus;
	}
	
	public function getCodigoCampus() {
		return $this->codigoCampus;
	}
}