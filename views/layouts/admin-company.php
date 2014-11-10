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
                        <li><a href="profile-company">Профиль</a></li>
                        <li><a href="password-company">Cменить пароль</a></li>
                    </ul>
                </li>
                <li>
                    <a href="places-company" class="maps">Места</a>
                </li>
                <li>
                    <a href="managers-company" class="layouts">Менеджеры</a>
                </li>
                <li>
                    <a href="certificates-company" class="pages">Сертификаты</a>
                </li>
                <li>
                    <a href="calendar-company" class="dashboard">Календарь</a>
                </li>
                <li>
                    <a href="#messages" class="mailbox">Сообщения<span class="label label-custom1">4</span></a>
                    <ul>
                        <li><a href="inbox-company">Входящие</a></li>
                        <li><a href="compose-company">Новое сообщение</a></li>
                        <li><a href="message-company">Подробно</a></li>
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
                <a href="profile-company"><img src="../assets-admin/images/company.png" alt="Компания" /></a>
            </figure>
            <div class="welcome">
                <p>Здравствуйте</p>
                <h5><a href="profile-company">Компания</a></h5>
            </div><!-- /.welcome -->
        </div><!-- /.user -->
        <!-- User Section End -->

        <!-- Header Top Navigation Start -->
        <nav class="topnav">
            <ul id="nav1">
                <li class="notifi">
                    <a href="#"><i class="glyphicon glyphicon-check"></i>Задачи (3)</a>
                    <div class="popdown">
                        <div class="notificationlist">
                            <ul>
                                <li>
                                    <h6><a href="#">18.10.2014</a></h6>
                                    <p>Арнольд Шварценеггер, бодибилдинг</p>
                                    <span><i class="glyphicon glyphicon-time"></i>18:00 - 20:00</span>
                                </li>
                                <li>
                                    <h6><a href="#">22.10.2014</a></h6>
                                    <p>Жан Клод Ван Дамм, йога</p>
                                    <span><i class="glyphicon glyphicon-time"></i>Пакет</span>
                                </li>
                                <li>
                                    <h6><a href="#">31.12.2014</a></h6>
                                    <p>Майк Тайсон, бокс</p>
                                    <span><i class="glyphicon glyphicon-time"></i>12:00 - 13:30</span>
                                </li>
                            </ul>
                            <a href="#" class="viewall">Все задачи</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </li>
                <li class="inbox">
                    <a href="inbox-company"><i class="glyphicon glyphicon-envelope"></i>Сообщения<span> (4)</span></a>
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
