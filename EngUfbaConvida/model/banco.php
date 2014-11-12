<?php
include('SQL.interface.php');
/*
 * Classe Banco
 */
abstract class Banco {
	protected $servidor;
    protected $usuario;
    protected $senha;
    protected $nomeBase;
    protected $conectado;
    protected $baseSelecionada;
    
    abstract public function conectar();
    abstract public function desconectar();
    
    public function setServidor($servidor) {
        $this->servidor = $servidor;
    }
    
    public function getServidor() {
        return $this->servidor;
    }
    
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    
    public function getUsuario() {
        return $this->usuario;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    
    public function getSenha() {
        return $this->senha;
    }
    
    public function setBase($nomeBase) {
        $this->nomeBase = $nomeBase;
    }
    
    public function getNomeBase() {
        return $this->nomeBase;
    }
}
