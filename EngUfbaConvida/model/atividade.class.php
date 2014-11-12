<?php
/*
 * Classe Atividade
 */
class Atividade {
	private $codigo;
	private $titulo;
	private $horario;
	private $data;
	private $descricao;
	private $codigoEvento;
	static private $tabela = "atividade";
	
	public function add() {
		$sql = "insert into ".self::$tabela." (titulo, horario, descricao, evento_id, data)
				values ('".$this->titulo."',
						'".$this->horario."','".$this->descricao."',
						".$this->codigoEvento.", '".$this->data."')";
		
		return $sql;
	}
	
	public function delete() {
		$sql = "delete from ".self::$tabela." where id = '".$this->codigo."'";
		
		return $sql;
	}
	
	public function atualizar() { }
	
	public function selecionar() {
	}
	
	//*************************************************************************
	//*************************************************************************
	
	public function setCodigo($newCodigo) {
		$this->codigo = $newCodigo;
	}
	
	public function getCodigo() {
		return $this->codigo;
	}
	
	public function setTitulo($newTitulo) {
		$this->titulo = $newTitulo;
	}
	
	public function getTitulo() {
		return $this->titulo;
	}
	
	public function setHorario($newHorario) {
		$this->horario = $newHorario;
	}
	
	public function getHorario() {
		return $this->horario;
	}
	
	public function setDescricao($newDescricao) {
		$this->descricao = $newDescricao;
	}
	
	public function getDescricao() {
		return $this->descricao;
	}
	
	public function setCodigoEvento($newCodigoEvento) {
		$this->codigoEvento = $newCodigoEvento;
	}
	
	public function getCodigoEvento() {
		return $this->codigoEvento;
	}
	
	public function setData($newData) {
		$this->data = $newData;
	}
	
	public function getData() {
		return $this->data;
	}
}