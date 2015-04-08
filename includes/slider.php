<!-- sw showcase -->
<link href="css/aw-showcase.css" media="screen" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="JavaScript" src="js/jquery.aw-showcase.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#showcase").awShowcase({
        content_width:			960,
        content_height:			444,
        fit_to_parent:			false,
        auto:					true,
        interval:				3000,
        continuous:				false,
        loading:				true,
        tooltip_width:			200,
        tooltip_icon_width:		32,
        tooltip_icon_height:	32,
        tooltip_offsetx:		18,
        tooltip_offsety:		0,
        arrows:					false,
        buttons:				false,
        btn_numbers:			false,
        keybord_keys:			true,
        mousetrace:				false,
        pauseonover:			true,
        stoponclick:			true,
        transition:				'fade',
        transition_delay:		300,
        transition_speed:		500,
        show_caption:			'onhover',
        thumbnails:				true,
        thumbnails_position:	'inside-last',
        thumbnails_direction:	'vertical',
        thumbnails_slidex:		0,
        dynamic_height:			false,
        speed_change:			true,
        viewline:				false
    });
});
</script>


<!-- header image/slider -->
<div class="header_bot header_slider">
    <div class="container">

        <!-- showcase slider -->
        <div id="showcase" class="showcase">

            <div class="showcase-slide">
                <div class="showcase-content">
                    <a href="#link-1"><img src="<?php echo IMAGE_URL; ?>slider/psicoterapia-crop.jpg" alt="02" /></a>
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Psicoterapia</h3>
                        <!-- <p>Extracorporeal membrane oxygen</p> -->
                    </div>
                </div>
            </div>

            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>slider/psicoterapia-infantil-crop.jpg" alt="02" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Psicoterapia Infantil</h3>
                    </div>
                </div>
            </div>
            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>slider/coaching-crop.jpg" alt="03" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Coaching</h3>
                    </div>
                </div>
            </div>
            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>slider/orientacao-vocacional-crop.jpg" alt="06" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Orientação Vocacional</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--/ showcase slider -->

    </div>
</div>
<!--/ header image/slider -->
