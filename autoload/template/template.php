<?php
// Variavel Página, serve para buscar no template // 
$page = 'home';
// Verifica se tem a variavel global //
if(isset($global_a)){
	if(empty($_COOKIE['iduser'])){
		$page = 'home';
	}
	else{
		$page = 'dashboard';
	}
	include 'page/'. $page . '/' . 'index.php';
}