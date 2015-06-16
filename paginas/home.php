<div class="container_12">

    <div class="row">

        <div class="col col_1_3">

            <div class="text-block-1">
                <div class="title_icon"> <img src="<?php echo IMAGE_URL; ?>col_icon_2.png" alt="" width="87" height="87" border="0"/>
                    <h3>Agende uma Visita</h3>
                </div>
                <p>Nossos canais de comunicação estão abertos para que você possa conhecer o nosso Espaço, nossos profissionais e os nossos serviços. Contate-nos!</p>
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
                <a href="<?php echo BASE_URL;?>agendamentos" class="button_link btn_pink"><span>Agendamentos</span></a>
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
                        <li><a href="<?php echo BASE_URL; ?>psicoterapia">Psicoterapia</a></li>
                        <li><a href="<?php echo BASE_URL; ?>psicoterapia-infantil">Psicoterapia Infantil</a></li>
                        <li><a href="<?php echo BASE_URL; ?>coaching">Coaching</a></li>
                        <li><a href="<?php echo BASE_URL; ?>grupos">Grupos</a></li>
                        <li><a href="<?php echo BASE_URL; ?>terapia-de-casal">Terapia de Casal</a></li>
                        <li><a href="<?php echo BASE_URL; ?>orientacao-vocacional">Orientação Vocacional</a></li>
                    </ul>
                </div>
                <a href="<?php echo BASE_URL;?>listaservicos" class="button_link"><span>VER TODOS OS SERVIÇOS</span></a>
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
                <a href="<?php echo BASE_URL; ?>quemsomos" class="button_link"><span>Mais sobre nós</span></a>
            </div>
        </div>

    </div>
    <!--/ 3 cols -->

    <div class="divider_space"></div>

    <div class="col_2_3">
        <!-- Begin MailChimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
        	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
        	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
        <form action="//sublimarpsicologia.us10.list-manage.com/subscribe/post?u=4e479364418596abb10cdfd68&amp;id=58d111d28a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
            	<h2>Receba nossas atualizações</h2>
                <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                <div class="mc-field-group">
                	<label for="mce-EMAIL">Email  <span class="asterisk">*</span>
                </label>
                	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="mc-field-group">
                	<label for="mce-FNAME">Nome </label>
                	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                </div>
            	<div id="mce-responses" class="clear">
            		<div class="response" id="mce-error-response" style="display:none"></div>
            		<div class="response" id="mce-success-response" style="display:none"></div>
            	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;"><input type="text" name="b_4e479364418596abb10cdfd68_58d111d28a" tabindex="-1" value=""></div>
                <div style={clear:both}><input type="submit" value="Salvar" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text'; /**
         * Translated default messages for the $ validation plugin.
         * Locale: PT_PT
         */
        $.extend($.validator.messages, {
        	required: "Campo de preenchimento obrigat&oacute;rio.",
        	remote: "Por favor, corrija este campo.",
        	email: "Por favor, introduza um endere&ccedil;o eletr&oacute;nico v&aacute;lido.",
        	url: "Por favor, introduza um URL v&aacute;lido.",
        	date: "Por favor, introduza uma data v&aacute;lida.",
        	dateISO: "Por favor, introduza uma data v&aacute;lida (ISO).",
        	number: "Por favor, introduza um n&uacute;mero v&aacute;lido.",
        	digits: "Por favor, introduza apenas d&iacute;gitos.",
        	creditcard: "Por favor, introduza um n&uacute;mero de cart&atilde;o de cr&eacute;dito v&aacute;lido.",
        	equalTo: "Por favor, introduza de novo o mesmo valor.",
        	accept: "Por favor, introduza um ficheiro com uma extens&atilde;o v&aacute;lida.",
        	maxlength: $.validator.format("Por favor, n&atilde;o introduza mais do que {0} caracteres."),
        	minlength: $.validator.format("Por favor, introduza pelo menos {0} caracteres."),
        	rangelength: $.validator.format("Por favor, introduza entre {0} e {1} caracteres."),
        	range: $.validator.format("Por favor, introduza um valor entre {0} e {1}."),
        	max: $.validator.format("Por favor, introduza um valor menor ou igual a {0}."),
        	min: $.validator.format("Por favor, introduza um valor maior ou igual a {0}.")
        });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->

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
