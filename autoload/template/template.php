<?php

//	Toda vez que você criar uma GET, tipo http://localhost/?profil_ide=1, e também criar uma pasta no /autoload/template/page e coloque uma index.php
//	Você terá que colocar
//	Exemplo:
//	if(isset($_GET['profile'])){
//		$page = 'profile';
//		$perfil_id = $_GET['profile_id'];
//	}

// Variavel Página, serve para buscar no template // 
$page = null;
$arquivo = null;

// Verifica se tem a variavel global //
if(isset($global)){
	if(empty($_COOKIE['user_id'])){
		$page = 'home';
		$arquivo = 'index';
	} else {
		$page = 'dashboard';
		$arquivo = 'index';
	}
	
	include 'page/'. $page . '/' . $arquivo . '.php';
}