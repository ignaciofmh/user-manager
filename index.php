<?php

session_start();
require_once 'config/parameters.php';
require_once 'config/db.php';
require_once 'autoload.php';
require_once 'helper/utils.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';


function showError()
{
	$error = new errorController();
	$error->index();
}

if (isset($_GET['controller'])) {
	$nombre_controlador = $_GET['controller'] . 'Controller';
} else if (!isset($_GET['controller'])) {
	$nombre_controlador = controller_default;
} else {
	showError();
}

if (class_exists($nombre_controlador)) {

	$controlador = new $nombre_controlador();
	if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
		$action = $_GET['action'];
		$controlador->$action();
	} else if (!isset($_GET['action']) && !method_exists($controlador, $_GET['action'])) {
		$action = action_default;
		$controlador->$action();
	} else {
		showError();
	}
} else {
	showError();
}

require_once 'views/layout/footer.php';
