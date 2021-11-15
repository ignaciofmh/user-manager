<?php

function autocargar($classname){
	// echo 'controllers/' . $classname . '.php';
	// exit();
	include 'controllers/' . $classname . '.php';
}

spl_autoload_register('autocargar');