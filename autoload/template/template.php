<?php

//Toda vez que você criar uma GET, tipo http://localhost/?profile=1, e também criar uma pasta no /autoload/template/page e coloque uma index.php
// Você terá que colocar
// Exemplo:
// if(isset($_GET['profile'])){
// 	$page = 'profile';
// 	$idperfil = $_GET['profile'];
// }

// Variavel Página, serve para buscar no template // 
$page = null;
$arquivo = null;

// Verifica se tem a variavel global //
if(isset($global_a)){
	if(empty($_COOKIE['user_id'])){
		$page = 'home';
		$arquivo = 'index';
	} else {
		$page = 'dashboard';
		$arquivo = 'index';
	}
	
	include 'page/'. $page . '/' . $arquivo . '.php';
}