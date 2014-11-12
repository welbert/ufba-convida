<?php
/*
 * Classe Apoio 
 */
class Apoio {
	private $codigo;
	private $nome;
	private $urlImg;
	private $codigoEvento;
	static private $tabela = "apoio";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (nome, img, evento_id)
				values ('".$this->nome."', '".$this->urlImg."', 
						".$this->codigoEvento.")";
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".__CLASS__." where id = '".$this->codigo."'";
	}
	
	public function atualizar() { }
	
	public function selecionar($condicao) {
		return 'select * from '.self::$tabela.' where evento_id = '.$condicao;
	}
	
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
	
	public function setUrlImg($newUrlImg) {
		$this->urlImg = $newUrlImg;
	}
	
	public function getUrlImg() {
		return $this->urlImg;
	}
	
	public function setCodigoEvento($newCodigoEvento) {
		$this->codigoEvento = $newCodigoEvento;
	}
	
	public function getCodigoEvento() {
		return $this->codigoEvento;
	}
}