<?php

class Nucleo {
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