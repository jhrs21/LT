<?php use_helper('I18N') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <title><?php echo get_slot('page_title', __('Inicio | LealTag - Mereces ser premiado')) ?></title>
        <link rel="shortcut icon" href="/favicon.ico" />
        <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
        <meta charset="UTF-8"/>
        <meta content="Servicios Lealtad TD C.A." name="author">
        <meta content="Copyright (c) Servicios Lealtad TD C.A., Inc. 2011-<?php echo date("Y")?>" name="copyright"/>
        <meta content="Living Document" name="doc-class"/>
        <meta content="General" name="rating"/>
        <meta content="web" name="distribution"/>
        <meta content="<?php echo get_slot('page_title', __('LealTag - Mereces ser premiado')) ?>" property="og:title"/>

        <?php if (has_slot('metas')): ?>
            <?php include_slot('metas') ?>
        <?php else: ?>
            <meta content="" name="abstract"/>
            <meta content="" name="description"/>
            <meta content="" name="keywords"/>
            <meta content="" name="keyphrases"/>
            <meta content="index, follow" name="robots"/>
            <meta content="http://www.lealtag.com/" property="og:url"/>
            <meta content="website" property="og:type"/>
            <meta content="LealTag" property="og:site_name"/>
            <meta content="http://www.lealtag.com/images/download_qr.png" property="og:image"/>
            <meta content="" property="og:description"/>
        <?php endif; ?>

        <link media="screen, projection" type="text/css" href="<?php echo Util::auto_version('/css/global.css') ?>" rel="stylesheet"></link>
        <link media="screen, projection" type="text/css" href="<?php echo Util::auto_version('/css/jquery_ui/jquery-ui-1.8.18.custom.css') ?>" rel="stylesheet"></link>

        <!--[if lt IE 7]>
            <div style=' clear: both; text-align:center; position: relative;'>
                <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
                    <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
                </a>
            </div>
        <![endif]-->

        <!--[if lt IE 8]>
            <link rel="stylesheet" href="<?php echo Util::auto_version('/css/blueprint/ie.css') ?>" type="text/css" media="screen, projection" />
        <![endif]-->

        <!--[if IE 7]>
            <link rel="stylesheet" href="<?php echo Util::auto_version('/css/ie_7_hacks_frontend.css') ?>" type="text/css" media="screen, projection" />
        <![endif]-->

        <!--[if IE 8]>
            <link rel="stylesheet" href="<?php echo Util::auto_version('/css/ie_8_hacks_frontend.css') ?>" type="text/css" media="screen, projection" />
        <![endif]-->

        <!--[if gte IE 9]>
            <style type="text/css">
                .gradient{filter:none;}
            </style>
        <![endif]-->

        <link rel="stylesheet" href="<?php echo Util::auto_version('/css/bvalidator.css') ?>" type="text/css" media="screen, projection" />
        <link rel="stylesheet" href="<?php echo Util::auto_version('/css/jquery_ui/jquery-ui-1.8.18.custom.css') ?>" type="text/css" media="screen, projection" />

        <?php include_stylesheets() ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
        <?php use_javascript('jquery.tinyscrollbar.min.js') ?>
        <?php use_javascript('jquery.bvalidator-yc.js') ?>
        <?php use_javascript('jquery.colorbox-min.js') ?>
        <?php use_javascript('jquery.pajinate.js') ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="wrap">
            <div id="main-background"></div>
            <?php include_partial('html_static/gtdHeader'); ?>
            <div id="header-container">
                <div id="header" class="container">
                    <a id="header-logo" title="LealTag" alt="LealTag" href="<?php echo url_for('homepage') ?>"></a>
                    <ul id="header-links">
                        <li><a href="<?php echo url_for('howto_user') ?>" title="¿Cómo funciona?">¿CÓMO FUNCIONA?</a></li>
                        <li><a href="<?php echo url_for('donde_estamos') ?>" title="Comercios afiliados">COMERCIOS AFILIADOS</a></li>
                        <li><a href="<?php echo url_for('howto_affiliate') ?>" title="Publica tu negocio">PUBLICA TU NEGOCIO</a></li>
                        <!--<li><a href="<?php echo url_for('user_new_ticket') ?>" title="Registra un código">REGISTRA UN CÓDIGO</a></li-->
                    </ul>
                    <div id="header-socialmedia-buttons">
                        <a class="socialmedia-button fb-button" href="https://www.facebook.com/LealTag" target="_blank"></a>
                        <a class="socialmedia-button twitter-button" href="http://www.twitter.com/lealtag" target="_blank"></a>
                    </div>
                </div>
            </div>
            <div class="top-separator-colors box_shadow_bottom">
                <div class="purple-background"></div>
                <div class="blue-background"></div>
                <div class="orange-background"></div>
            </div>
            <div id="main">
                <?php echo $sf_content ?>
            </div>
        </div>
        <div id="footer">
            <div id="footer-content" class="container">
                <div id="copyrights" class="span-7 prepend-1 darkgray">
                    <div class="copyrights-icon" alt="Derechos Reservados"></div>
                    <p>LealTag 2013, Todos los derechos reservados</p>
                    <p>J-40058569-4</p>
                </div>
                <div id="footer-links-container" class="span-16 last">
                    <ul id="footer-links" class="white">
                        <li><a href="<?php echo url_for('homepage') ?>" title="Inicio">INICIO</a></li>
                        <li><a href="<?php echo url_for('howto_user') ?>" title="¿Cómo funciona?">¿CÓMO FUNCIONA?</a></li>
                        <li><a href="<?php echo url_for('donde_estamos') ?>" title="Comercios afiliados">COMERCIOS AFILIADOS</a></li>
                        <li><a href="<?php echo url_for('contact_affiliate') ?>" title="Publica tu negocio">PUBLICA TU NEGOCIO</a></li>
                        <li><a href="<?php echo url_for('homepage') . '#contact' ?>" title="Contáctanos">CONTÁCTANOS</a></li>
                        <li><a href="http://blog.lealtag.com" target="_blank" title="Blog de LealTag">BLOG</a></li>
                        <li><a href="http://www.lealtag.com/biz" title="Módulo de negocios">MÓDULO DE NEGOCIOS</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            // Lo siguiente es el código de Google Analytics
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-30126093-1']);
            _gaq.push(['_setDomainName', 'lealtag.com']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
            // Fin código Google Analytics
            
            $(document).ready(function(){
                if($.browser.mozilla||$.browser.opera){document.removeEventListener("DOMContentLoaded",$.ready,false);document.addEventListener("DOMContentLoaded",function(){$.ready()},false)}$.event.remove(window,"load",$.ready);$.event.add( window,"load",function(){$.ready()});$.extend({includeStates:{},include:function(url,callback,dependency){if(typeof callback!='function'&&!dependency){dependency=callback;callback=null}url=url.replace('\n','');$.includeStates[url]=false;var script=document.createElement('script');script.type='text/javascript';script.onload=function(){$.includeStates[url]=true;if(callback)callback.call(script)};script.onreadystatechange=function(){if(this.readyState!="complete"&&this.readyState!="loaded")return;$.includeStates[url]=true;if(callback)callback.call(script)};script.src=url;if(dependency){if(dependency.constructor!=Array)dependency=[dependency];setTimeout(function(){var valid=true;$.each(dependency,function(k,v){if(!v()){valid=false;return false}});if(valid)document.getElementsByTagName('head')[0].appendChild(script);else setTimeout(arguments.callee,10)},10)}else document.getElementsByTagName('head')[0].appendChild(script);return function(){return $.includeStates[url]}},readyOld:$.ready,ready:function(){if($.isReady) return;imReady=true;$.each($.includeStates,function(url,state){if(!state)return imReady=false});if(imReady){$.readyOld.apply($,arguments)}else{setTimeout(arguments.callee,10)}}});
                $( ".opener" ).colorbox({inline:true, href:"#download-modal", width:"50%"});
                $('#ingresa').click(function(event){
                    event.preventDefault();
                    $('#new_login_div').slideToggle('fast');
                });
            })
            
            $(document).ready(function(){
                //Page Flip on hover
                $('#pageflip').hover(function() {
                    $('#pageflip img , .back-img').stop().animate({width: "348px",height: "349px"}, 500);
                } , function() {
                    $('#pageflip img').stop().animate({width: "50px",height: "52px"}, 220);
                    $('.back-img').stop().animate({width: "50px",height: "50px"}, 200);
                });
            });
        </script>
	<script id="_webengage_script_tag" type="text/javascript">
  		var _weq = _weq || {};
  		_weq['webengage.licenseCode'] = '~c2ab34db';
  		_weq['webengage.widgetVersion'] = "4.0";
 
  		(function(d){
    			var _we = d.createElement('script');
    			_we.type = 'text/javascript';
    			_we.async = true;
    			_we.src = (d.location.protocol == 'https:' ? "https://ssl.widgets.webengage.com" : "http://cdn.widgets.webengage.com") + "/js/widget/webengage-min-v-4.0.js";
    			var _sNode = d.getElementById('_webengage_script_tag');
    			_sNode.parentNode.insertBefore(_we, _sNode);
  		})(document);
	</script>
    </body>
</html>
