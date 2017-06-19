<?php

$page = Input::get('page');
switch ($page) {
	case 'register_clients':
		include "pages/register_clients.php";
		break;
	
	case 'dashboard':
		include "pages/dashboard.php";
		break;
	case 'manage_clients':
		include "pages/manage_clients.php";
		break;
	case 'manage_reservations':
		include "pages/manage_reservations.php";
		break;

	case 'create_clinic_card':
		include "pages/create_clinic_card.php";
		break;	

		
	case 'manage_clinic_card':
		include 'pages/manage_clinic_card.php';	
		break;
	case 'manage_doc_times':
		include 'pages/manage_doc_times.php';	
		break;
	case 'manage_cmimi_filter':
		include 'pages/manage_cmimi_filter.php';	
		break;
		
	default:
		include "pages/dashboard.php";
		break;
}