<div class="container announces-container">
    <div id="main">
        <div class="row">

            <div class="span9">

                <h1 class="page-header">Новые объявления</h1>

                <!-- ANNOUNCE TEXT -->
                <article class="post-48 post type-post status-publish format-standard has-post-thumbnail hentry category-decorations" id="post-48">
                    <header class="entry-header">
                        <span class="date"><a rel="bookmark" title="Some announce text" href="#"><time datetime="2013-05-09T08:23:41+00:00" class="entry-date">22 сентября 2014</time></a></span>
                        <!--                            <h2 class="page-header entry-title">Заголовок объявления</h2>-->
                    </header><!-- .entry-header -->
                    <div class="entry-content">
                        <p>Сезонные скидки для постоянных клиентов в клубе <a href="location">Алекс-Фитнесс</a>.</p>
                        <p><a class="more-link btn btn-primary btn-small arrow-right" href="announce">Подробнее...</a></p>
                    </div><!-- .entry-content -->
                </article>
                <!-- /ANNOUNCE TEXT -->

                <!-- ANNOUNCE TEXT -->
                <article class="post-48 post type-post status-publish format-standard has-post-thumbnail hentry category-decorations" id="post-48">
                    <header class="entry-header">
                        <span class="date"><a rel="bookmark" title="Some announce text" href="#"><time datetime="2013-05-09T08:23:41+00:00" class="entry-date">27 сентября 2014</time></a></span>
                        <!--                            <h2 class="page-header entry-title">Заголовок объявления</h2>-->
                    </header><!-- .entry-header -->
                    <div class="entry-content">
                        <p>Мастер-класс по Ушу у <a href="trainer">Джеки Чана</a> на открытом воздухе. Место проведения
                            <a href="location">Марсово Поле</a>.</p>
                        <p><a class="more-link btn arrow-right btn-primary btn-small" href="announce">Подробнее...</a></p>
                    </div><!-- .entry-content -->
                </article>
                <!-- /ANNOUNCE TEXT -->


            </div><!-- /.span9 -->

            <!-- SIDEBAR -->
            <div class="sidebar span3">

                <!-- SEARCH FORM -->
                <?= $this->render('/public/sidebar/side-search') ?>
                <!-- SEARCH FORM -->

                <?= $this->render('/public/sidebar/our-agents') ?>
                <div class="hidden-tablet">
                    <?= $this->render('/public/sidebar/properties') ?>
                </div>

            </div><!-- /.sidebar.span3 -->

        </div><!-- /.row -->
    </div><!-- /.main -->
</div><!-- /.container -->