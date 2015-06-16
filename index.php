<?php

require_once('functions.php');

define('BASE_URL', '/');
define('IMAGE_URL', BASE_URL . 'images/');
define('PHONE', '55 54 3039-0690');
define('EMAIL', 'sublimar@sublimarpsicologia.com.br');
define('ADDRESS', 'Rua Borges de Medeiros, 553, Centro');
define('CEP', 'Caxias do Sul - RS');

$page = Tools::getCurrentPageUrl();

require('includes/header.php');

switch($page) {

	// PAGES AREA

	case 'agendamentos':	// pagina de contato

		require_once('paginas/agendamentos.php');
		require_once('includes/sidebar.php');
		break;

	case 'profissionais':

		require_once('paginas/profissionais.php');
		require_once('includes/sidebar.php');
		break;

	case 'localizacao':

		require_once('paginas/localizacao.php');
		require_once('includes/sidebar.php');
		break;

	case 'quemsomos':

		require_once('paginas/quemsomos.php');
		require_once('includes/sidebar.php');
		break;

	case 'listaservicos':

		require_once('paginas/listaservicos.php');
		require_once('includes/sidebar.php');
		break;

	case 'parceiros':

		require_once('paginas/parceiros.php');
		require_once('includes/sidebar.php');
		break;

	// SERVICES AREA

		case 'coaching':

			require_once('servicos/coaching.php');
			require_once('includes/sidebar.php');
			break;

		case 'grupos':

			require_once('servicos/grupos.php');
			require_once('includes/sidebar.php');
			break;

		case 'orientacao-vocacional':

			require_once('servicos/orientacao-vocacional.php');
			require_once('includes/sidebar.php');
			break;

		case 'psicoterapia-infantil':

			require_once('servicos/psicoterapia-infantil.php');
			require_once('includes/sidebar.php');
			break;

		case 'psicoterapia':

			require_once('servicos/psicoterapia.php');
			require_once('includes/sidebar.php');
			break;

		case 'terapia-de-casal':

			require_once('servicos/terapia-de-casal.php');
			require_once('includes/sidebar.php');
			break;

	default:

		require_once('includes/slider.php');
		require_once('paginas/home.php');

		break;
}


require_once('includes/footer.php');
