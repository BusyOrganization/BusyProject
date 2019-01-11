<?php
	date_default_timezone_set('America/Sao_Paulo');
	$dominio = 'http://seu_dominio';
	$hospedagem = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'instany';
	
	$db = new mysqli($hospedagem, $usuario, $senha, $database) or die('MySQL Error');
    error_reporting(0);