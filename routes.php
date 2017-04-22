<?php

$page = Input::get('page');
switch ($page) {
	case 'register_clients':
		include "pages/register_clients.php";
		break;
	
	case 'manage_clients':
		include "pages/manage_clients.php";
		break;
	default:
		include "pages/dashboard.php";
		break;
}