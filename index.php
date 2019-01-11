<?php
// Requere o arquivos de configuracoes //
require_once 'core/config.php';
require_once 'core/sistema.php';

// Criar instância da classe nucleo //
$nucleo = new Nucleo($db,$dominio);

// Variavel global //
$global = 202;

// Requere o autoload - Páginas html, e tal //
require_once 'autoload/template/autoload.php';