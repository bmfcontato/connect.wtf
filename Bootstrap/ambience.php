<?php

// Define o local.
setlocale(LC_ALL, 'pt_BR.utf8');

// Define o timezone.
date_default_timezone_set('America/Sao_Paulo');

// True para ambiente de desenvolvimento ou False para produção.
if(!defined('DEBUGGER')) {
    define('DEBUGGER', true);
}
