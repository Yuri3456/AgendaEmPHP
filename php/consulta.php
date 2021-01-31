<?php
 class conexao{
 	public static function Conectar() {
 		define('servidor', 'localhost');
 		define('nombre_bd', 'agenda_db');
 		define('usuario', 'root');
 		define('password', '');
 		$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
		try{
			 //$db = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
			 $db = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);
 			return $db;	
 		}catch (Exception $e){
 			die("Erro de conexão: " . $e->getMessage());
 		}
 	}
 }