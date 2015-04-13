<div class="container_12">

    <div class="row">

        <div class="col col_1_3">

            <div class="text-block-1">
                <div class="title_icon"> <img src="<?php echo IMAGE_URL; ?>col_icon_2.png" alt="" width="87" height="87" border="0"/>
                    <h3>Agende uma Visita</h3>
                </div>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloreue laudantium, <strong>totam rem aperiam</strong>, eaque ipsa quae ab illo Lorem ipsum dolor sit amet, consectetur  et quasi architecto:</p>
                <!-- widget contacts -->
                <div class="widget-container widget_contact">
                    <div class="inner">
                        <div class="contact-phone">
                            <label>telefone:</label>
                            <strong><?php echo PHONE; ?></strong> </div>
                            <div class="contact-mail">
                                <label>e-mail:</label>
                                <a href="mailto:<?php echo EMAIL; ?>"><?php echo EMAIL; ?></a>
                            </div>
                    </div>
                </div>
                <!--/ widget contacts -->
                <p>...ou envie uma mensagem pelo nosso agendamento:</p>
                <a href="<?php echo BASE_URL;?>paginas/agendamentos.php" class="button_link btn_pink"><span>Agendamentos</span></a>
            </div>
        </div>

        <div class="col col_1_3">

            <div class="text-block-1">
                <div class="title_icon">
                    <img src="<?php echo IMAGE_URL; ?>col_icon_1.png" alt="" width="87" height="87" border="0"/>
                    <h3>Conheça nossos Serviços</h3>
                </div>
                <p>Conheça um pouco mais daquilo que o nosso Espaço oferece e veja se tem algo que se adequa aquilo que você procura.</p>
                <div class="list_dots_blue">
                    <ul>
                        <li><a href="<?php echo BASE_URL; ?>servicos/psicoterapia.php">Psicoterapia</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicos/psicoterapia-infantil.php">Psicoterapia Infantil</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicos/coaching.php">Coaching</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicos/grupos.php">Grupos</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicos/terapia-de-casal.php">Terapia de Casal</a></li>
                        <li><a href="<?php echo BASE_URL; ?>servicos/orientacao-vocacional.php">Orientação Vocacional</a></li>
                    </ul>
                </div>
                <a href="<?php echo BASE_URL;?>paginas/servicos.php" class="button_link"><span>VER TODOS OS SERVIÇOS</span></a>
            </div>

        </div>

        <div class="col col_1_3">
            <div class="text-block-1">
                <div class="title_icon">
                    <img src="<?php echo IMAGE_URL; ?>col_icon_3.png" alt="" width="87" height="87" border="0"/>
                    <h3>Conheça nossos Profissionais</h3>
                </div>
                <p>Aqui você poderá saber um pouco da formação profissional e das especializações de cada um dos nossos profissionais.</p>
                <p><img src="<?php echo IMAGE_URL; ?>equipe.jpg" width="270" height="180" alt="" /></p>
                <a href="<?php echo BASE_URL; ?>paginas/quemsomos.php" class="button_link"><span>Mais sobre nós</span></a>
            </div>
        </div>

    </div>
    <!--/ 3 cols -->

    <div class="divider_space"></div>

    <div class="box_light_gray box_border2">
        <div class="col_2_3">
            <div class="social_content">
                <label>Nos encontre nas redes sociais:</label>
                <!-- <a href="#"><img src="<?php echo IMAGE_URL; ?>icons/social_twitter_mid.png" alt="" /></a> -->
                <a href="https://www.facebook.com/sublimarespacopsicologia" target="_blank"><img src="<?php echo IMAGE_URL; ?>icons/social_facebook_mid.png" alt="Facebook" /></a>
                <a href="https://instagram.com/sublimarpsicologia/" target="_blank"><img src="<?php echo IMAGE_URL; ?>icons/social_instagram_mid.png" alt="Instagram" /></a>
            </div>
        </div>
        <div class="col_1_3">
            <!-- like facebook -->
        </div>
        <div class="clear"></div>
    </div>

    <div class="divider_space"></div>

    <div class="col col_2_3">

        <!-- <div id="testimonials" class="slideshow slideQuotes">
            <h3>What our patients have to say about us:</h3>
            <div class="slides_container">
                <div class="slide">
                    <div class="quote-text">Over the last eighteen months our sales have increased three fold since the launch of our new web site. We have to say it has made us delighted we chose Medica.</div>
                    <div class="quote-author"><span>George Mansion</span>, Dermatology patient</div>
                </div>
                <div class="slide">
                    <div class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="quote-author"><span>James Backer</span>, Physiotherapy patient</div>
                </div>
                <div class="slide">
                    <div class="quote-text">Over the last eighteen months our sales have increased three fold since the launch of our new web site. We have to say it has made us delighted we chose Medica.</div>
                    <div class="quote-author"><span>Mr. Smith</span>, Diabetes patient</div>
                </div>
                <div class="slide">
                    <div class="quote-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim ad minim veniam, quis nostrud exercitation .</div>
                    <div class="quote-author"><span>MIKE HAMMOND</span>, Dental Center patiant</div>
                    <p></p>
                </div>
            </div>
            <a href="#" class="prev">Prev</a>
            <a href="#" class="next">Next</a>
        </div> -->

        <script language="javascript" type="text/javascript" charset="utf-8">
            $(function(){
                $('#testimonials').slides({
                    hoverPause: true,
                    autoHeight: true,
                    pagination: false,
                    generatePagination: false,
                    effect: 'fade',
                    fadeSpeed: 150
                });
            });
        </script>

    </div>

    <!-- <div class="col col_1_3"> -->

        <!-- newsletter -->
        <!-- <div class="newsletterBox">
            <div class="inner">
                <div class="ribbon"></div>
                <h2>Novidades</h2>
                <div class="before-text">Inscreva-se para receber todas as nossas novidades e atualizações:</div>
                <form action="" method="post">
                    <input type="text" value="" name="" class="inputField" />
                    <input type="submit" value="" name="" class="btn-submit" />
                    <div class="clear"></div>
                </form>
            </div>
        </div> -->
        <!--/ newsletter -->

    <!-- </div> -->

</div>
