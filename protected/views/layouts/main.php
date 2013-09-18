<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="pt-br" />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slider.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" />
        <!-- JS -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery-1.7.2.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-popover.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/bootstrap-carousel.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jplayer.playlist.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/jquery.easing.1.3.js"></script>
        
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/assets/js/actions/menu.js"></script>


        <!-- Titulo -->
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>
    <!-- header -->
    <body id="geral">
        <div class="container" id="page" >
            <div id="header" align="center" >
                <div id="logo"></div>
                <!-- mainmenu -->
                <div id="mainmenu">
                    <div id="menu">
                        <div class="menubnt active">
                            <a class="home" href="#">Inicio</a>
                        </div>
                        <div class="menubnt">
                            <a class="radio" href="#">Radio</a>
                        </div>
                        <div class="menubnt" style="padding-right:20px;">
                            <a class="portfolio" href="#">Portfólio</a>
                        </div>
                        <div class="menubnt">
                            <a class="contato" href="#">Contato</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                        'links'=>$this->breadcrumbs,
                    )); ?><!-- breadcrumbs -->
            <?php endif?>
            <!-- Conteudo -->
            <div id="content-full" align="left">
                    <?php echo $content; ?>
                </div>
            <div class="clear"></div>
            <!-- footer -->
            <div id="footer">
                <div id="footer-left">
                    Copyright &copy; <?php echo date('Y'); ?> by Marcelo Web Developer.<br/>
                    Todos os direitos reservados.<br/>
                </div>
                <div id="footer-rigth">
                    
                </div>
            </div>
        </div><!-- page -->
    </body>
</html>
