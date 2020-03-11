<?php

$inicio="";

define('LOCALHOST',"http://{$_SERVER['HTTP_HOST']}/{$inicio}");
if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
	$barra="";
}
else{
	$barra="/";
}
define('RAIZ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$inicio}");

define('IMAGENS',RAIZ.'imagens/');

define('HOST',"localhost");
define('DB',"sistema");
define('USER',"root");
define('PASS',"");
