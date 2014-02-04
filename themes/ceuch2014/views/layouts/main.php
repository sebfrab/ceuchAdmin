<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<link rel="Shortcut Icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/sol.ico"/>
        <meta name="author" content="Sebastian Franco Brantes UTFSM - ¿y por qué no? - seb.frab@gmail.com"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="language" content="es" />
        
        <meta http-equiv="X-UA-Compatible" content="IE=7,8,9" />        
        
        <!-- Bootstrap 3.0 -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css" />
        
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/general.css" />
        
        <!-- Add fancyBox -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
        
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        
</head>

<body>
        <header>
            <nav role="navigation">
                <div id="barraSuperior" class="navbar navbar-fixed-top">
                    
                    <div class="navbar-default navbar-collapse">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bs-js-navbar-collapse">
                                    <span class="sr-only">Toggle</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>" class="navbar-brand"><img id="logo" src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" /></a>
                            </div>

                            <div class="navbar-collapse bs-js-navbar-collapse collapse">

                                <?php $this->widget('zii.widgets.CMenu',array(
                                        'htmlOptions' => array(
                                            'class'=>'nav navbar-nav',
                                            'id'=>'menu',
                                        ),
                                        'submenuHtmlOptions' => array(
                                        ),
                                        'items'=>array(
                                                array('label'=>'Home', 'url'=>array('/site/index'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Noticias', 'url'=>array('/noticias/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Compromisos', 'url'=>array('/compromisos/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Apostolado', 'url'=>array('/apostolado/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Videos', 'url'=>array('/videos/admin'), 'visible'=>!Yii::app()->user->isGuest),
                                                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                                        ),
                                )); ?>
                                
                                <ul id="redesSociales" class="visible-md visible-lg visible-sm">
                                    <li><a target="_blank" href="http://www.facebook.com/ceuch" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/facebook.png" /></a></li>
                                    <li><a target="_blank" href="http://twitter.com/#!/ceuchelsol" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/twitter.png" /></a></li>
                                    <li><a target="_blank" href="http://www.youtube.com/user/ceuchelsol" ><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/youtube.png" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>


	<?php echo $content; ?>

	<footer>
            <div class="container">
               <div id="row">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-lg-8">
                        
                    </div>
                    <div id="author" class="col-lg-3">
                        <a href="#" title="&#191; y por qu&eacute; no &#63; / seb.frab@gmail.com">
                            <p>
                                ¿y por qué no? 
                                <p style="font-weight: bold; font-size: 12px;">Sebasti&aacute;n Franco</p>
                            </p>
                        </a>
                    </div>
               </div>
            </div>
        </footer>
    
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/collapse.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/dropdown.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.blockUI.js"></script>
        
        <!-- Slider -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/owl-carousel/owl.carousel.min.js"></script>
        
        <!-- Add fancyBox -->
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/fancybox/jquery.fancybox.js"></script>
        
        
        <script type="text/javascript">
            $(document).ready(function() {

               
            });
        </script>

</body>
</html>
