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
                    <a href="#link-1"><img src="<?php echo IMAGE_URL; ?>temp/slider_img_01.jpg" alt="02" /></a>
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Neonatal Care</h3>
                        <p>Extracorporeal membrane oxygen</p>
                    </div>
                </div>
            </div>

            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>temp/slider_img_02.jpg" alt="02" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Dental Center</h3>
                        <p>Procedures, Surgery, Radiography </p>
                    </div>
                </div>
            </div>
            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>temp/slider_img_03.jpg" alt="03" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Cardiology</h3>
                        <p>Cath Lab, EP Lab, Rehabilitation</p>
                    </div>
                </div>
            </div>
            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>temp/slider_img_06.jpg" alt="06" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Diabetes</h3>
                        <p>Medical Nutrition Therapy</p>
                    </div>
                </div>
            </div>
            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>temp/slider_img_05.jpg" alt="05" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Orthopedics</h3>
                        <p>Joint, Spine and Back injuries</p>
                    </div>
                </div>
            </div>
            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>temp/slider_img_04.jpg" alt="04" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Physiotherapy</h3>
                        <p>Hydrotherapy,Inpatient Services, Maternity Services</p>
                    </div>
                </div>
            </div>
            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>temp/slider_img_07.jpg" alt="07" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Cancer Support</h3>
                        <p>diagnosis of cancer and cancer treatments</p>
                    </div>
                </div>
            </div>
            <div class="showcase-slide">
                <div class="showcase-content">
                    <img src="<?php echo IMAGE_URL; ?>temp/slider_img_02.jpg" alt="02" />
                </div>
                <div class="showcase-thumbnail">
                    <div class="showcase-thumbnail-content">
                        <h3>Wound Care</h3>
                        <p>Extracorporeal membrane oxygen</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/ showcase slider -->

    </div>
</div>
<!--/ header image/slider -->
