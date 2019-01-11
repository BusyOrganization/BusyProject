<?php
// Requere o arquivos de configuracoes //
require_once 'core/config.php';
require_once 'core/sistema.php';

// Criar instância da classe nucleo & busy //
$nucleo = new Nucleo($db,$dominio);
$busy = new Busy($db,$dominio);

// Verificações //
$busy->verificarSessao(false);

// Variavel global //
$global = 202;

// Requere o autoload - Páginas html, e tal //
require_once 'autoload/template/autoload.php';