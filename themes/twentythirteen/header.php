<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta name="viewport" content="width=device-width">		
		<!--[if lt IE 9]> 			
			<link href="index/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />		
		<![endif]-->		
		<!--[if lt IE 9]>			
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>		
		<![endif]-->
        <?php wp_head(); ?>		
		<!--[if lt IE 9]>
			<script type="text/javascript" src="excanvas.js"></script>
		<![endif]-->		
		<script src="/wp-content/themes/twentythirteen/js/tagcanvas.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/hellasdental.js"></script>
		
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <?php if (is_front_page()) { // действие для главной страницы ?>
            <div class="bg-mask"></div>
            <div class="bg_slider">
                <? echo do_shortcode("[metaslider id=93]"); ?>
            </div>
            <? } ?>

	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '440162249504342',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
            <header>
                    <div class="main">
                        <div class="padding-header">
                            <div class="col-1 spacing-1">
                                <div class="padding-top">
                                    <div class="appointment">
                                        <a rel="nofollow" href="http://hellas-dental.date/appointment/">
                                            Записаться <span>на прием</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 spacing">
                                <div class="padding-top-1">
                                    <h1><a rel="nofollow" class="logo" href="/">HellasDental</a></h1>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="padding-top-2">
                                    <div class="wrapper margin-bot">
                                        <ul class="top-menu">
                                            <li class="current">
                                                <a>
                                                    <span>Рус</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">Укр</a>
                                            </li>
                                            <li>
                                                <a href="#">Eng</a>
                                            </li>
                                        </ul>                    
                                    </div>
                                    <div class="wrapper">
                                        <div class="phone">
                                            +38 048 <b>734 00 43</b>
                                        </div>
                                    </div>
                                    <a rel="nofollow" class="call" href="http://hellas-dental.date/stomatologicheskaya_klinika_hellas_dental_odessa/feedback/">обратный звонок</a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>

                    </div>
                </header>
            <!--div class="bg-mask"></div-->
            <div class="clear"></div>
            <div id="main" class="site-main">

