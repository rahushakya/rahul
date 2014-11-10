<?php
/* @var $this \yii\web\View */
/* @var $content string */

$auth = isset($_GET['authorized']);

?>
<?php $this->beginPage() ?>

    <!DOCTYPE html>
    <html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Aviators - byaviators.com">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="/assets-public/img/favicon.png" type="image/png">
        <link rel="stylesheet" href="/assets-public/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="/assets-public/css/bootstrap-responsive.css" type="text/css">
        <link rel="stylesheet" href="/assets-public/libraries/chosen/chosen.css" type="text/css">
        <link rel="stylesheet" href="/assets-public/libraries/bootstrap-fileupload/bootstrap-fileupload.css" type="text/css">
        <link rel="stylesheet" href="/assets-public/libraries/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.min.css" type="text/css">
        <link rel="stylesheet" href="/assets-public/css/realia-blue.css" type="text/css" id="color-variant-default">
        <link rel="stylesheet" href="/assets-public/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="/assets-public/css/fullcalendar.css" type="text/css">
        <link rel="stylesheet" href="/assets-public/css/custom.css" type="text/css">
        <link rel="stylesheet" href="/assets-public/css/style.css" type="text/css">
        <link rel="stylesheet" href="#" type="text/css" id="color-variant">
		<link href="/assets-public/css/skdslider.css" rel="stylesheet">
		
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
    <script type="text/javascript" src="/assets-public/js/jquery.js"></script>
    <script type="text/javascript" src="/assets-public/js/skdslider.js"></script>
    <!--<script type="text/javascript" src="/assets-public/js/jquery.ezmark.js"></script>-->
    <script type="text/javascript" src="/assets-public/js/jquery.currency.js"></script>
    <script type="text/javascript" src="/assets-public/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/assets-public/js/retina.js"></script>
    <script type="text/javascript" src="/assets-public/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/assets-public/js/carousel.js"></script>
    <script type="text/javascript" src="/assets-public/js/gmap3.min.js"></script>
    <script type="text/javascript" src="/assets-public/js/gmap3.infobox.min.js"></script>
    <script type="text/javascript" src="/assets-public/libraries/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.min.js"></script>
    <script type="text/javascript" src="/assets-public/libraries/chosen/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="/assets-public/libraries/iosslider/_src/jquery.iosslider.min.js"></script>
    <script type="text/javascript" src="/assets-public/libraries/bootstrap-fileupload/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src='/assets-public/js/moment.min.js'></script>
    <script type="text/javascript" src='/assets-public/js/fullcalendar.js'></script>
    <script type="text/javascript" src='/assets-public/js/lang/ru.js'></script>
    <script type="text/javascript" src='/assets-public/js/fullcalendar-init.js'></script>
    <script type="text/javascript" src='/assets-public/js/calendar-popup.js'></script>
    <script type="text/javascript" src="/assets-public/js/realia.js"></script>
    <script type="text/javascript" src="/assets-public/js/custom.js"></script>
	
        <title>ФитГид</title>
    </head>
    <body>
    <div id="wrapper-outer" >
    <div id="wrapper">
    <div id="wrapper-inner">

        <?php if($auth): ?>
            <?= $this->render('//auth') ?>
        <?php else: ?>
            <?= $this->render('//non-auth') ?>
        <?php endif; ?>

        <!-- NAVIGATION -->
        <div id="navigation">
            <div class="container">
                <div class="navigation-wrapper">
                    <div class="navigation clearfix-normal">

                        <ul class="nav">
                            <li class="menuparent">
                                <span class="menuparent nolink">Места</span>
                                <ul>
                                    <li><a href="/public/trainers-new">Торговый</a></li>
                                    <li><a href="/public/trainers-popular">ЧВНТР</a></li>
                                    <li><a href="/public/trainers-all">Склад</a></li>
                                    <li><a href="/public/trainers-all">Площадка</a></li>
                                    <li><a href="/public/trainers-all">Все</a></li>
                                </ul>
                            </li>
                            <li class="menuparent">
                                <span class="menuparent nolink">Персонал</span>
                                <ul>
                                    <li><a href="/public/locations-new">Продавец</a></li>
                                    <li><a href="/public/locations-indoor">Птумоутер</a></li>
                                    <li><a href="/public/locations-outdoor">Все</a></li>
                                </ul>
                            </li>
                            <li class="menuparent">
                                <span class="menuparent nolink">Оборудование</span>
                                <ul>
                                    <li><a href="/public/announces-new">Мебель</a></li>
                                    <li><a href="/public/announces-popular">ЗВУК</a></li>
                                    <li><a href="/public/announces-all">Свет</a></li>
                                    <li><a href="/public/announces-all">Все</a></li>
                                </ul>
                            </li>
                            <li class="menuparent">
                                <span class="menuparent nolink">Услуги</span>
                                <ul>
                                    <li><a href="/public/about-us">Дизайн</a></li>
                                    <li><a href="/public/faq">Кетеринг</a></li>
                                    <li><a href="/public/blog">Развлечения</a></li>
                                    <li><a href="/public/contact-us">Транспорт</a></li>
                                    <li><a href="/public/contact-us">Все</a></li>
                                </ul>
                            </li>
                            <li class="menuparent">
                                <span class="menuparent nolink">О проекте</span>
                                <ul>
                                    <li><a href="/public/about-us">Общие сведения</a></li>
                                    <li><a href="/public/faq">FAQ</a></li>
                                    <li><a href="/public/blog">Блог</a></li>
                                    <li><a href="/public/contact-us">Контакты</a></li>
                                </ul>
                            </li>
                        </ul><!-- /.nav -->

                        <div class="language-switcher">
                            <div class="controls">
                                <select id="">
                                    <option id="spb">Санкт-Петербург</option>
                                    <option id="moscow">Москва</option>
                                    <option id="kazan">Казань</option>
                                </select>
                            </div><!-- /.controls -->
                        </div><!-- /.language-switcher -->

                    </div><!-- /.navigation -->
                </div><!-- /.navigation-wrapper -->
            </div><!-- /.container -->
        </div><!-- /.navigation -->


        <!-- CONTENT -->
        <div id="content" class="<?= $auth ? 'content-map' : '' ?>" >

            <?= $content ?>

        </div>
        <!-- /#content -->

    </div>
    <!-- /#wrapper-inner -->

    <div id="footer-wrapper">

        <!-- FOOTER TOP WAS HERE -->

        <div id="footer" class="footer container">
            <div id="footer-inner">
                <div class="row">

                    <div class="span4 copyright">
                        <p>© Copyright 2014, <a href="#">Эрго-эксперт</a>. All rights reserved.</p>
                    </div>
                    <!-- /.copyright -->

                    <div class="span4 info">
                        <div class="site-email">
                            <span class="fa fa-envelope"></span>
                            <a href="mailto:info@gaikagroup.com">info@gaikagroup.com</a>
                        </div><!-- /.site-email -->
                        <div class="site-phone">
                            <span class="fa fa-phone"></span>
                            <span>8 (812) 777-09-09</span>
                        </div><!-- /.site-phone -->
                    </div>

                    <div class="span4 share">
                        <div class="content">
                            <a href="/public/therms-of-use" class="footer-therms">Условия использования</a>
                            <ul class="menu nav">
                                <li class="first leaf"><a href="http://www.facebook.com" class="facebook">Facebook</a>
                                </li>
                                <li class="leaf"><a href="http://www.twitter.com" class="twitter">Twitter</a></li>
                                <li class="last leaf"><a href="https://vk.com/" class="vkontakte fa fa-vk"></a></li>
                            </ul>
                        </div><!-- /.content -->
                    </div><!-- /.span6 -->

                </div><!-- /.row -->
            </div><!-- /#footer-inner -->
        </div><!-- /#footer -->

    </div><!-- /#footer-wrapper -->
    </div><!-- /#wrapper -->
    </div><!-- /#wrapper-outer -->

    <!-- .palette is removed in production system -->

    </body>
    </html>


<?php $this->endPage() ?>