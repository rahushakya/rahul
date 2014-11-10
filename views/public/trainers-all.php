<div class="container">
    <div id="main">
        <div class="row">

            <div class="span9">
                <div class="our-agents-large">
                    <h2 class="page-header">Персонал</h2>

                    <div class="content">

                        <!-- TRAINER -->
                        <div class="agent">
                            <div class="row">
                                <div class="image span2">
                                    <img src="/assets-public/img/tmp/arni-big.jpg" alt="Arni" class="trainers-list-img">
                                </div><!-- /.image -->

                                <div class="body span6">
                                    <h3><a href="trainer">Арнольд Шварценеггер</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor diam in quam molestie ullamcorper. Praesent a tellus massa. Nulla laoreet tempus congue. Praesent ut ultrices nunc. Etiam at libero sed turpis tempor placerat in eget lectus. Curabitur pretium, ante vel aliquam lacinia, ipsum felis hendrerit leo, ut aliquet neque odio at nisl.</p>
                                </div><!-- /.body -->

                            </div><!-- /.row -->
                        </div><!-- /.agent -->

                        <!-- TRAINER -->
                        <div class="agent">
                            <div class="row">
                                <div class="image span2">
                                    <img src="/assets-public/img/tmp/slay-big.jpg" alt="Slay" class="trainers-list-img">
                                </div><!-- /.image -->

                                <div class="body span6">
                                    <h3><a href="trainer">Сильвестр Стэллоун</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor diam in quam molestie ullamcorper. Praesent a tellus massa. Nulla laoreet tempus congue. Praesent ut ultrices nunc. Etiam at libero sed turpis tempor placerat in eget lectus. Curabitur pretium, ante vel aliquam lacinia, ipsum felis hendrerit leo, ut aliquet neque odio at nisl.</p>
                                </div><!-- /.body -->

                            </div><!-- /.row -->
                        </div><!-- /.agent -->

                        <!-- TRAINER -->
                        <div class="agent">
                            <div class="row">
                                <div class="image span2">
                                    <img src="/assets-public/img/tmp/jackie-big.jpg" alt="Jackie" class="trainers-list-img">
                                </div><!-- /.image -->

                                <div class="body span6">
                                    <h3><a href="trainer">Джеки Чан</h3></a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor diam in quam molestie ullamcorper. Praesent a tellus massa. Nulla laoreet tempus congue. Praesent ut ultrices nunc. Etiam at libero sed turpis tempor placerat in eget lectus. Curabitur pretium, ante vel aliquam lacinia, ipsum felis hendrerit leo, ut aliquet neque odio at nisl.</p>
                                </div><!-- /.body -->

                            </div><!-- /.row -->
                        </div><!-- /.agent -->

                    </div><!-- /.content -->
                </div><!-- /.our-agents -->
            </div><!-- /.span9 -->

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