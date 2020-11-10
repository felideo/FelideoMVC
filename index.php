<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);

@session_start();
require 'vendor/autoload.php';

performance_start();

require 'core/framework/Fail.php';
require 'core/libs/functions.php';

if(file_exists('config.php')){
	require 'config.php';
}

show_errors(defined('DEVELOPER') && !empty(DEVELOPER));

try{
	$big_bang = new Framework\BigBang();
	$big_bang->inflate();
}catch(\Exception $e){
	show_error($e);
}catch(\PDOException $e){
	show_error($e);
}catch(\Error $e){
	show_error($e);
}catch(\Fail $e){
	$e->show_error();
}
