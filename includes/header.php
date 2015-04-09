<?php

    global $page;
    $currentPage = 'class="menu-item-home parent current-menu-ancestor"';
    $servicosPages = array(
        'servicos.php', 'coaching.php', 'grupos.php', 'orientacao-vocacional.php',
        'psicoterapia-infantil.php', 'psicoterapia.php', 'terapia-de-casal.php'
    );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="ThemeFuse" />
    <meta name="Description" content="A short description of your company" />
    <meta name="Keywords" content="Some keywords that best describe your business" />
    <title>Medica - Homepage</title>
    <link href="<?php echo BASE_URL; ?>style.css" media="screen" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo BASE_URL; ?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL; ?>js/preloadCssImages.js"></script>

    <script type="text/javascript" language="JavaScript" src="<?php echo BASE_URL; ?>js/general.js"></script>
    <script type="text/javascript" language="JavaScript" src="<?php echo BASE_URL; ?>js/jquery.tools.min.js"></script>
    <script type="text/javascript" language="JavaScript" src="<?php echo BASE_URL; ?>js/jquery.easing.1.3.js"></script>

    <script type="text/javascript" language="JavaScript" src="<?php echo BASE_URL; ?>js/slides.jquery.js"></script>

    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    <link href="<?php echo BASE_URL; ?>custom.css" media="screen" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="body_wrap">

        <div class="header">

            <div class="header_top">
                <div class="container">
                    <div class="logo"><a href="<?php echo BASE_URL; ?>"><img src="<?php echo IMAGE_URL; ?>logo.png" width="334" height="108" alt="Medica" /></a></div>
                    <div class="header_contacts">
                        <p>Telefone:  <span class="icon_phone"><?php echo PHONE; ?></span></p>
                        <p>Rua Borges de Medeiros, 553, Centro, Caxias do Sul <a href="<?php echo BASE_URL; ?>paginas/localizacao.php" class="icon_map">Ver endereço</a></p>
                    </div>
                </div>
            </div>

            <div class="header_menu">
                 <div class="container">
                    <div class="topmenu">
                        <ul class="dropdown">
                            <li <?php if ($page == 'home') echo $currentPage; ?>><a href="<?php echo BASE_URL; ?>"><span>Início</span></a>
                                <!-- <ul>
                                    <li class="current-menu-item"><a href="index.html"><span>Homepage Slider 1</span></a></li>
                                    <li><a href="index-slider-2.html"><span>Homepage Slider 2</span></a></li>
                                </ul> -->
                            </li>
                            <li <?php if ($page == 'quemsomos.php') echo $currentPage; ?>><a href="<?php echo BASE_URL; ?>paginas/quemsomos.php"><span>Quem Somos</span></a></li>
                            <li <?php if (in_array($page, $servicosPages)) echo $currentPage; ?>><a href="<?php echo BASE_URL; ?>paginas/servicos.php"><span>Serviços</span></a>
                                <ul>
                                    <li><a href="<?php echo BASE_URL; ?>servicos/psicoterapia.php"><span>Psicoterapia</span></a></li>
                                    <li><a href="<?php echo BASE_URL; ?>servicos/psicoterapia-infantil.php"><span>Psicoterapia Infantil</span></a></li>
                                    <li><a href="<?php echo BASE_URL; ?>servicos/coaching.php"><span>Coaching</span></a></li>
                                    <li><a href="<?php echo BASE_URL; ?>servicos/grupos.php"><span>Grupos</span></a></li>
                                    <li><a href="<?php echo BASE_URL; ?>servicos/terapia-de-casal.php"><span>Terapia de Casal</span></a></li>
                                    <li><a href="<?php echo BASE_URL; ?>servicos/orientacao-vocacional.php"><span>Orientação Vocacional</span></a></li>
                                    <!-- <li><a href="#"><span>Shortcodes</span></a>
                                        <ul>
                                            <li><a href="shortcodes-text.html"><span>Text &amp; Images</span></a></li>
                                            <li><a href="shortcodes-buttons.html"><span>Buttons &amp; Lists</span></a></li>
                                            <li><a href="shortcodes-charts.html"><span>Charts</span></a></li>
                                            <li><a href="shortcodes-columns.html"><span>Columns</span></a></li>
                                            <li><a href="shortcodes-lightbox.html"><span>Lightbox</span></a></li>
                                            <li><a href="shortcodes-media.html"><span>Media</span></a></li>
                                            <li><a href="shortcodes-tables.html"><span>Tables</span></a></li>
                                            <li><a href="shortcodes-tabs.html"><span>Tabs and Toggles</span></a></li>
                                            <li><a href="shortcodes-typography.html"><span>Typography</span></a></li>
                                            <li><a href="shortcodes-widgets.html"><span>Widgets</span></a></li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li <?php if ($page == 'profissionais.php') echo $currentPage; ?>><a href="<?php echo BASE_URL; ?>paginas/profissionais.php"><span>Profissionais</span></a></li>
                            <li <?php if ($page == 'agendamentos.php') echo $currentPage; ?>><a href="<?php echo BASE_URL; ?>paginas/agendamentos.php"><span>Agendamentos</span></a></li>
                            <li <?php if ($page == 'localizacao.php') echo $currentPage; ?>><a href="<?php echo BASE_URL; ?>paginas/localizacao.php"><span>Localização</span></a></li>
                            <li <?php if ($page == 'parceiros.php') echo $currentPage; ?>><a href="<?php echo BASE_URL; ?>paginas/parceiros.php"><span>Parceiros</span></a></li>
                        </ul>
                    </div>
              </div>
            </div>

            <!-- header image/slider -->
            <!-- <div class="header_bot header_image">
                <div class="container">
                    <img src="<?php echo IMAGE_URL; ?>temp/header_image_2.jpg" width="960" height="142" alt="" />
                </div>
            </div> -->
            <!--/ header image/slider -->

        </div>
        <!--/ header -->

    <div class="middle sidebarRight">
