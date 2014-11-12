<?php

class Evento {
    private $id;
    private $titulo;
    private $cartaz;
    private $link;
    private $inicio;
    private $fim;
    private $descricao;
    private $academicoId;
    private static $tabela = "evento";
    
    public function add() {
        $sql = "insert into ".self::$tabela." (titulo, cartaz, link, inicio, fim, descricao, academico_id)
        		values ('".$this->titulo."', '".$this->cartaz."', '".$this->link."', '".$this->inicio."',
        		'".$this->fim."', '".$this->descricao."', ".$this->academicoId.")";
        
        return $sql;
    }
    
    public function delete() {
    	$sql = "delete from ".self::$tabela." where id = ".$this->id;
    }
    
    public function selecionaTodos(){
        return "select * from ".self::$tabela;
    }

    public function buscaTexto($texto) {
        return "select * from ".self::$tabela.'where descricao like "'.$texto.'"';
    }

    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getCartaz() {
        return $this->cartaz;
    }

    function getInicio() {
        return $this->inicio;
    }

    function getFim() {
        return $this->fim;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getAcademicoId() {
        return $this->academico_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setCartaz($cartaz) {
        $this->cartaz = $cartaz;
    }

    function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    function setFim($fim) {
        $this->fim = $fim;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setAcademicoId($academico_id) {
        $this->academicoId = $academico_id;
    }
    
    function setLink($newLink) {
    	$this->link = $newLink;
    }
    
    function getLink() {
    	return $this->link;
    }
}
