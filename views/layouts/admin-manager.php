<?php $this->beginContent('@app/views/layouts/admin.php') ?>

<!-- Sidebar Start -->
<aside class="sidebar">
    <div class="sidebar-in">

        <!-- Sidebar Header Start -->
        <header>
            <!-- Logo Start -->
            <div class="logo">
                <p class="logo__text">Личный кабинет</p>
            </div>
            <!-- Logo End -->
            <!-- Toggle Button Start -->
            <a href="#" class="togglemenu fa fa-list">&nbsp;</a>
            <!-- Toggle Button End -->
            <div class="clearfix"></div>
        </header>
        <!-- Sidebar Header End -->

        <!-- Sidebar Navigation Start -->
        <nav class="navigation">
            <ul class="navi-acc" id="nav2">
                <li>
                    <a href="#account" class="loginoptions">Мой аккаунт</a>
                    <ul>
                        <li><a href="profile-manager">Профиль</a></li>
                        <li><a href="password-manager">Cменить пароль</a></li>
                    </ul>
                </li>
                <li>
                    <a href="places-manager" class="maps">Места</a>
                </li>
                <li>
                    <a href="certificates-manager" class="pages">Сертификаты</a>
                </li>
                <li>
                    <a href="calendar-manager" class="dashboard">Календарь</a>
                </li>
                <li>
                    <a href="#messages" class="mailbox">Сообщения<span class="label label-custom1">3</span></a>
                    <ul>
                        <li><a href="inbox-manager">Входящие</a></li>
                        <li><a href="compose-manager">Новое сообщение</a></li>
                        <li><a href="message-manager">Подробно</a></li>
                    </ul>
                </li>

            </ul><!-- /.navi-acc -->

            <div class="clearfix"></div>

        </nav><!-- /.navigation -->
        <!-- Sidebar Navigation End -->

        <!-- FOOTER start -->
        <footer class="footer-wrapper">

            <div class="footer-copyright">
                <p>&copy; Copyright 2014. All rights reserved.</p>
                <a href="#">Эрго-эксперт</a>
            </div><!-- /.footer-copyright -->

            <div class="footer-email">
                <i class="glyphicon glyphicon-envelope"></i>
                <a href="mailto:info@gaikagroup.com">info@gaikagroup.com</a>
            </div><!-- /.site-email -->

            <div class="footer-phone">
                <i class="glyphicon glyphicon-earphone"></i>
                <span>8 (812) 777-09-09</span>
            </div><!-- /.site-phone -->

            <div class="footer-gaika">
                <a href="http://gaikagroup.com"><img src="/assets-admin/images/gaika.png" alt="Gaika"/></a>
            </div><!-- /.footer-gaika -->

        </footer>
        <!-- FOOTER end -->

    </div><!-- /.sidebar-in -->
</aside>
<!-- Sidebar End -->


<!-- Right Section Start -->
<div class="right-sec">

    <header>

        <!-- Logo Section Start -->
        <div class="logo-wrapper">
            <div class="logo">
                <a href="index.html" title="Home">
                    <img src="/assets-admin/images/wellness-logo.png" alt="Home">
                </a>
            </div><!-- /.logo -->
            <div class="site-name">
                <a href="/" title="Home" class="brand">ФитГид</a>
            </div><!-- /.site-name -->
        </div>
        <!-- Logo Section End -->

        <!-- User Section Start -->
        <div class="user">
            <figure>
                <a href="profile-manager"><img src="../assets-admin/images/manager.png" alt="Менеджер" /></a>
            </figure>
            <div class="welcome">
                <p>Здравствуйте</p>
                <h5><a href="profile-manager">Менеджер</a></h5>
            </div><!-- /.welcome -->
        </div><!-- /.user -->
        <!-- User Section End -->

        <!-- Header Top Navigation Start -->
        <nav class="topnav">
            <ul id="nav1">
                <li class="notifi">
                    <a href="#"><i class="glyphicon glyphicon-check"></i>Задачи (2)</a>
                    <div class="popdown">
                        <div class="notificationlist">
                            <ul>
                                <li>
                                    <h6><a href="#">12.10.2014</a></h6>
                                    <p>Ирина Петрова, аква-аэробика</p>
                                    <span><i class="glyphicon glyphicon-time"></i>День + Время</span>
                                </li>
                                <li>
                                    <h6><a href="#">18.10.2014</a></h6>
                                    <p>Арнольд Шварценеггер, бодибилдинг</p>
                                    <span><i class="glyphicon glyphicon-time"></i>День</span>
                                </li>
                            </ul>
                            <a href="#" class="viewall">Все задачи</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="inbox">
                    <a href="inbox-manager"><i class="glyphicon glyphicon-envelope"></i>Сообщения<span> (3)</span></a>
                </li>
            </ul><!-- /#nav1 -->
        </nav><!-- /.topnav -->

        <!-- Header Top Navigation End -->
        <div class="clearfix"></div>

    </header>


    <!-- CONTENT SECTION start -->

    <?= $content ?>

    <!-- CONTENT SECTION end -->


</div><!-- /.right-sec-->
<!-- Right Section Start -->


<?php $this->endContent() ?>
