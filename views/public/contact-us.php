<div class="container">

    <div id="main">
        <div class="row">

            <div class="span9">
                <h1 class="page-header">Контакты</h1>
                <iframe class="map" width="425" height="350" src="https://maps.google.com/maps?q=Лифляндская+ул.,+3,+Санкт-Петербург,+190020&amp;num=1&amp;ie=UTF8&amp;ll=59.907109,30.261507&amp;spn=0.041038,0.077162&amp;t=m&amp;z=14&amp;output=embed"></iframe>

                <p>
                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                </p>

                <div class="row">
                    <div class="span3">
                        <h3 class="address">Адрес</h3>
                        <p class="content-icon-spacing">
                            Лифляндская 3<br>
                            Санкт-Петербург, Россия
                        </p>
                    </div>
                    <div class="span3">
                        <h3 class="call-us">Телефон</h3>
                        <p class="content-icon-spacing">
                            1900-CO-WORKER<br>
                            1800-3322-4453
                        </p>
                    </div>
                    <div class="span3">
                        <h3 class="email">Email</h3>
                        <p class="content-icon-spacing">
                            <a href="mailto:info@byaviators.com">contact management</a><br>
                            <a href="mailto:support@byaviators.com">contact support</a>
                        </p>
                    </div>
                </div><!-- /.row -->

                <h2>Отправить сообщение</h2>

                <form method="post" class="contact-form" action="?">
                    <div class="name control-group">
                        <label class="control-label" for="inputContactName">
                            Имя
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputContactName">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="email control-group">
                        <label class="control-label" for="inputContactEmail">
                            Email
                            <span class="form-required" title="This field is required.">*</span>
                        </label>
                        <div class="controls">
                            <input type="text" id="inputContactEmail">
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="control-group">
                        <label class="control-label" for="inputContactMessage">
                            Текст сообщения
                            <span class="form-required" title="This field is required.">*</span>
                        </label>

                        <div class="controls">
                            <textarea id="inputContactMessage"></textarea>
                        </div><!-- /.controls -->
                    </div><!-- /.control-group -->

                    <div class="form-actions">
                        <input type="submit" class="btn btn-primary arrow-right" value="Отправить">
                    </div><!-- /.form-actions -->
                </form>
            </div><!-- /.span6 -->

            <!-- SIDEBAR -->
            <div class="sidebar span3">

                <!-- SEARCH FORM -->
                <?= $this->render('/public/sidebar/side-search') ?>
                <!-- SEARCH FORM -->

                <?= $this->render('/public/sidebar/properties') ?>
                <div class="hidden-tablet">
                    <?= $this->render('/public/sidebar/advert') ?>
                </div>

            </div><!-- /.sidebar.span3 -->

        </div><!-- /.row -->
    </div><!-- /#main -->

</div><!-- /.container -->