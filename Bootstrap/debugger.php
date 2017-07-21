<?php

// Ambiente de desenvolvimento.
if(DEBUGGER === TRUE) {
	error_reporting(E_ALL | E_STRICT);
	ini_set('display_erros', 1);	
} else {
	// Ambiente de produção.
	error_reporting(0);
	ini_set("display_errors", 0);
}
