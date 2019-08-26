<?php
function required_config($nameClass)
{
	$route = __DIR__.DIRECTORY_SEPARATOR.$nameClass.'.php';  
	if(file_exists($route)){
		require_once($route);
	}
}

spl_autoload_register('required_config');

