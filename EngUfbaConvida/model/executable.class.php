<?php

class Executable {
	/*
	 * EXECUTE_QUERY_GET_ID
	 * 
	 * Executa uma query e retorna o último ID inserido
	 */
	public static function EXECUTE_QUERY_GET_ID($objPDO, $query) {
		try {
			$objPDO->exec($query);
			
			return $objPDO->lastInsertId();
		} catch(PDOException $e) {
			print "Erro: ".$e->getMessage()."<br/>";
		}
	}
	
	/*
	 * EXECUTE_QUERY_GET_OBJ_PDO
	 * 
	 * Executa a query e retorna o resultado da consulta (um objeto PDO)
	 */
	public static function EXECUTE_QUERY_GET_OBJ_PDO($objPDO, $query) {
		try {
			return $objPDO->query($query);
		} catch(PDOException $e) {
			print "Erro: ".$e->getMessage()."<br/>";
		}
	}
}
