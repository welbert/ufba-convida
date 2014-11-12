<?php
/*
 * Classe Localidade
 */
class Localidade {
	private $codigo;
	private $endereco;
	static private $tabela = "localidade";
	
	public function inserir() {
		$sql = "insert into ".self::$tabela." (endereco)
				values ('".$this->endereco."')";
		
		return $sql;
	}
	
	public function deletar() {
		$sql = "delete from ".self::$tabela." where codigo = '".$this->codigo."'";

		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() { }
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setEndereco($newEndereco) {
		$this->endereco = $newEndereco;
	}
	
	public function getEndereco() {
		return $this->endereco;
	}
}