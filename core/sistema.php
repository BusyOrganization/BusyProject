<?php

class Nucleo {
	public $db;
	public $dominio;

	function __construct($db,$dominio) {
		$this->db = $db;
		$this->dominio = $dominio;
	}

	public function pegarDominio() {
		return $this->dominio;
	}

	public function gerarSessaoID() {
		return substr(md5(time()),0,10);
	}

	public function verificarSessao($requerimento) {
		$sessao_id = $this->session_id;

		if(!empty($sessao_id)){
			$sessao = $this->db->query("SELECT * FROM sessao WHERE sessao_id='".$sessao_id."'");
			$sessao = $sessao->fetch_object();

			if($sessao->status == 0){
				if($requerimento == true){
					header('Location: '.$this->dominio().'/sair');
					exit;
				} else {
					return false;
				}
			} else {
				return true;
			}
		} else {
			if($requerimento == true){
				header('Location: '.$this->dominio().'/dashboard');
				exit;
			} else {
				return false;
			}
		}
	}

	public function finalizarSessao() {
		session_destroy();
		header('Location: '.$this->dominio.'/entrar');
		exit;
	}

	public function critografarSenha($senha) {
		return password_hash($senha, PASSWORD_DEFAULT);
	}

	public function pegarPais($ip) {
		$html = file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip);
		$html = unserialize($html);
		return $html['geoplugin_countryName'];
	}

	public function pegarPaisSigla($ip) {
		$html = file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip);
		$html = unserialize($html);
		return $html['geoplugin_countryCode'];
	}

	public function pegarCidade($ip) {
		$html = file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip);
		$html = unserialize($html);
		return $html['geoplugin_city'];
	}

	public function pegarEstado($ip) {
		$html = file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip);
		$html = unserialize($html);
		return $html['geoplugin_regionName'];
	}

	public function pegarEstadoSigla($ip) {
		$html = file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip);
		$html = unserialize($html);
		return $html['geoplugin_regionCode'];
	}

	public function pegarIP($ip) {
		$html = file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip);
		$html = unserialize($html);
		return $html['geoplugin_request'];
	}

	public function pegarContinente($ip) {
		$html = file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip);
		$html = unserialize($html);
		return $html['geoplugin_continentName'];
	}
}
