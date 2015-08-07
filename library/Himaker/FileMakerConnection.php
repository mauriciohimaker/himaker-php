<?php

/**
 * Classe para conectar com o banco filemaker
 *  
 * @author Recigio Poffo
 * @package Himaker
 * 
 */
include_once 'FileMaker/FileMaker.php';

class Himaker_FileMakerConnection {
	
	// Guarda uma instância da classe
	private static $fm;
	
	/**
	 * Classe que cria conexão
	 */

	public static function createConnection(){

		if (!isset(self::$fm)) {
			
			self::$fm=new FileMaker();
			self::$fm->setProperty('database', 'Ponto.fmp12');
			self::$fm->setProperty('hostspec', '192.168.25.150');
                        //self::$fm->setProperty('hostspec', 'shaokahn.no-ip.biz');
			self::$fm->setProperty('username', 'php');
			self::$fm->setProperty('password', 'xZKQJ7%-ZVBtQC2!');
		}
		return self::$fm;
	}
	
	
}
