<?php

define('BASE_URL', '/');
define('IMAGE_URL', BASE_URL . 'images/');
define('PHONE', '(xx) abcd-efgh');
define('EMAIL', 'teste@test.com.br');

require_once('includes/header.php');

if (isset($_GET['q'])) {
	$str = explode('/', $_GET['q']);
	$page = $str[count($str)-1];
} else {
	$page = 'home';
}

switch($page) {

	// PAGES AREA

	case 'agendamentos.php':	// pagina de contato

		require_once('paginas/agendamentos.php');
		require_once('includes/sidebar.php');
		break;

	case 'profissionais.php':

		require_once('paginas/profissionais.php');
		require_once('includes/sidebar.php');
		break;

	case 'localizacao.php':

		require_once('paginas/localizacao.php');
		require_once('includes/sidebar.php');
		break;

	case 'quemsomos.php':

		require_once('paginas/quemsomos.php');
		require_once('includes/sidebar.php');
		break;

	case 'servicos.php':

		require_once('paginas/servicos.php');
		require_once('includes/sidebar.php');
		break;

	case 'parceiros.php':

		require_once('paginas/parceiros.php');
		require_once('includes/sidebar.php');
		break;

	// SERVICES AREA

		case 'coaching.php':

			require_once('servicos/coaching.php');
			require_once('includes/sidebar.php');
			break;

		case 'grupos.php':

			require_once('servicos/grupos.php');
			require_once('includes/sidebar.php');
			break;

		case 'orientacao-vocacional.php':

			require_once('servicos/orientacao-vocacional.php');
			require_once('includes/sidebar.php');
			break;

		case 'psicoterapia-infantil.php':

			require_once('servicos/psicoterapia-infantil.php');
			require_once('includes/sidebar.php');
			break;

		case 'psicoterapia.php':

			require_once('servicos/psicoterapia.php');
			require_once('includes/sidebar.php');
			break;

		case 'terapia-de-casal.php':

			require_once('servicos/terapia-de-casal.php');
			require_once('includes/sidebar.php');
			break;

	default:

		require_once('includes/slider.php');
		require_once('paginas/home.php');

		break;
}


require_once('includes/footer.php');
