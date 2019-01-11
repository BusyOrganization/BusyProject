<?php
	date_default_timezone_set('America/Sao_Paulo');
	
	/* CONFIGURAÇÕES DO SERVIDOR */
	$dominio = 'http://localhost';
	$hospedagem = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'busy';
	
	/* CONECTAR AO SERVIDOR (MYSQLi) */
	$db = new mysqli($hospedagem, $usuario, $senha, $database) or die('MySQL Error');
    error_reporting(0);