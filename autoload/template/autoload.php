<?php
// Verifica se tem a variavel global //
if(isset($global)){
	require_once 'template.php'; // Inclui o HTML
} else {
	header('HTTP/1.0 404 Not Found', true, 404);
}