<?php

// Define o encoding do content.
header('Content-Type: text/html; charset=utf-8');

// Define o encoding do Smarty.
define('SMARTY_RESOURCE_CHAR_SET', 'UTF-8');

// Define o default encoding interno.
mb_internal_encoding('UTF-8');

// Define o default encoding HTTP output.
mb_http_output('UTF-8');

// Define o default encoding HTTP input.
mb_http_input('UTF-8');

// Define uma linguagem, no caso unicode (UTF-8).
mb_language('uni');

// Define o encoding para multibyte regex.
mb_regex_encoding('UTF-8');

// Define um callback para manipular o output.
ob_start('mb_output_handler');
