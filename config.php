<?php
// Configuração do Fuso Horário
date_default_timezone_set('America/Sao_Paulo');

$protocolo = !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
$url       = $protocolo . $_SERVER['HTTP_HOST'] . '/';

// Sempre use barra (/) no final das URLs
define('URL', $url);

// Configuração com Banco de Dados
define('DB_TYPE', 'mysql');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'SWDB');
define('DB_USER', 'root');
define('DB_PASS', 'lilith');

define('DEVELOPER', false);
define('PREVENT_CACHE', true);

define('APP_NAME', 'Scientific Work Database');

if(function_exists('xdebug_disable')){
	xdebug_disable();
}


define('EMAIL_EMAIL', 'naoresponder.swdb@gmail.com');
define('EMAIL_SENHA', '6825eb91af6c644970f5cf72bd0f6b01');

unset($GLOBALS['todo']);

// $GLOBALS['todo'] = [
// 	'adicionar namespaces nas custom exceptions',

// 	'Revisar slider do banner',
// 	'Select2 no cadastro de curso, campus e palavra chave e colocar % nos espaços dos selects 2',
// 	'verificar concordancia de feminino masculino artigo das ações com o nome do modulo',
// 	'revisar assets ofline',
// 	'Revisar redirecinamento não logado e sem premissão',
// 	'Dar um geito de não ficar mudando a senha do usuario caso algum arrombado fique cadastrando orientador com o mesmo email',
// 	'Atributo delete message de todos os modulos',
// 	'colocar localizador no insert update do campus, curso e palavra chave',
// 	'cron para apagar o arquivo?',
// 	'ver pq icone do swdb não aparece am algumas paginas',
// " colocar id thumb no cadastro do trabalho"
// " validar ctrl+v"
// ];

