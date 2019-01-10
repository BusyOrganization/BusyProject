<?php
// Verifica se tem a variavel global //
if(isset($global_a)){
	
}
else{
	header('HTTP/1.0 404 Not Found', true, 404);
}