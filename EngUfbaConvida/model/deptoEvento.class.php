<?php
/*
 * Classe Evento
 */
class DeptoEvento {
	private $codigoDepto;
	private $codigoEvento;
	static private $tabela = "departamento_has_evento";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (codigoDepartamento, codigoEvento)
				values ('".$this->codigoDepartamento."',
					'".$this->codigoEvento."')";
		
		return $sql;
	}
	
	public function delete() {
		//$sql = "delete from ".__CLASS__." where codigo = '".$this->codigo."'";
		#faltam um ID para essa classe

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigoDepto($newCodigoDepto) {
		$this->codigoDepto = $newCodigoDepto;
	}
	
	public function getCodigoDepto() {
		return $this->codigoDepto;
	}
	
	public function setCodigoEvento($newCodigoEvento) {
		$this->codigoEvento = $newCodigoEvento;
	}
	
	public function getCodigoEvento() {
		return $this->codigoEvento;
	}
}