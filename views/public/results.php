<div class="map-wrapper">
    <div class="map">
        <div id="map" class="map-inner"></div><!-- /.map-inner -->

        <div class="container">
            <div class="row">

                <!-- SEARCH FORM -->
                <?= $this->render('//search-form') ?>
                <!-- SEARCH FORM -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.map -->
</div><!-- /.map-wrapper -->

<div class="container">
    <div id="main">
        <div class="row">

            <div class="span9">
                <h2 class="page-header">Результаты поиска</h2>
                <div class="alert alert-success"><strong>Йога</strong> - тренировка для взрослых - до 500 руб. - индивидуально - женщины</div>

                <ul class="tabs nav nav-tabs" id="myTab">
                    <li class="active"><a href="#home">Тренировки (4)</a></li>
                    <li><a href="#profile">Тренеры (3)</a></li>
                    <li><a href="#messages">Места (3)</a></li>
                    <li><a href="#settings">Объявления (2)</a></li>
                </ul>

                <div class="tab-content">

                    <!-- TAB 1-->
                    <div class="tab-pane active" id="home">

                        <?= $this->render('results/tab-workouts') ?>

                    </div>
                    <!-- /TAB 1 -->

                    <!-- TAB 2 -->
                    <div class="tab-pane" id="profile">

                        <?= $this->render('results/tab-trainers') ?>

                    </div>
                    <!-- /TAB 2 -->

                    <!-- TAB 3 -->
                    <div class="tab-pane" id="messages">

                        <?= $this->render('results/tab-locations') ?>

                    </div>
                    <!-- /TAB 3 -->

                    <!-- TAB 4 -->
                    <div class="tab-pane" id="settings">

                        <?= $this->render('results/tab-announces') ?>

                    </div>
                    <!-- /TAB 4 -->

                </div>
                <!-- /.tab-content -->

            </div><!-- /.span9 -->

            <div class="sidebar span3">

                <?= $this->render('/public/sidebar/our-agents') ?>

                <div class="hidden-tablet">

                    <?= $this->render('/public/sidebar/properties') ?>

                </div>
            </div><!-- /.sidebar -->

        </div><!-- /.row -->
    </div><!-- /.main -->
</div><!-- /.container -->