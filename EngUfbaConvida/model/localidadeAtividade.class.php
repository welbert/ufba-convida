<?php
/*
 * 
 */

class LocalidadeAtividade {
	private $codigoAtividade;
	private $codigoLocalidade;
	static private $tabela = "atividade_has_localidade";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (atividade_id, localidade_id)
				values ('".$this->codigoAtividade."', '".$this->codigoLocalidade."')";
		
		return $sql;
	}
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigoAtividade($newCodigoAtividade) {
		$this->codigoAtividade = $newCodigoAtividade;
	}
	
	public function getCodigoAtividade() {
		return $this->codigoAtividade;
	}
	
	public function setCodigoLocalidade($newCodigoLocalidade) {
		$this->codigoLocalidade = $newCodigoLocalidade;
	}
	
	public function getCodigoLocalidade() {
		return $this->codigoLocalidade;
	}
}
