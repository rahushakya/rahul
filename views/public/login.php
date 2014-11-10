<div class="container">
    <div id="main">
        <h1 class="page-header">Вход</h1>

        <div class="login-register">
            <div class="row">
                <div class="span4">
                    <ul class="tabs nav nav-tabs">
                        <li class="active"><a href="#login">Вход</a></li>
                        <li><a href="#register">Регистрация</a></li>
                    </ul>
                    <!-- /.nav -->

                    <div class="tab-content">
                        <div class="tab-pane" id="login">
                            <form method="post" action="?">
                                <div class="control-group">
                                    <label class="control-label" for="inputLoginLogin">
                                        Логин
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>

                                    <div class="controls">
                                        <input type="text" id="inputLoginLogin">
                                    </div>
                                    <!-- /.controls -->
                                </div>
                                <!-- /.control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="inputLoginPassword">
                                        Пароль
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>

                                    <div class="controls">
                                        <input type="password" id="inputLoginPassword">
                                    </div>
                                    <!-- /.controls -->
                                </div>
                                <!-- /.control-group -->

                                <div class="form-actions">
                                    <!--                    <input type="submit" value="Вход" class="btn btn-primary arrow-right">-->
                                    <a href="/admin/calendar-trainer" class="btn btn-primary arrow-right">Вход</a>
                                    <ul class="login-social">
                                        <li class="first leaf"><a href="#" class="fa fa-facebook"></a>
                                        </li>
                                        <li class="leaf"><a href="#" class="fa fa-twitter"></a></li>
                                        <li class="last leaf"><a href="#" class="fa fa-vk"></a></li>
                                    </ul>
                                </div>
                                <!-- /.form-actions -->
                            </form>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane active" id="register">
                            <form method="post" action="?">
                                <div class="control-group">
                                    <label class="control-label" for="inputRegisterFirstName">
                                        Имя
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>

                                    <div class="controls">
                                        <input type="text" id="inputRegisterFirstName">
                                    </div>
                                    <!-- /.controls -->
                                </div>
                                <!-- /.control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="inputRegisterSurname">
                                        Фамилия
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>

                                    <div class="controls">
                                        <input type="text" id="inputRegisterSurname">
                                    </div>
                                    <!-- /.controls -->
                                </div>
                                <!-- /.control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="inputRegisterSurname">
                                        Кто Вы?
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>

                                    <div class="language-switcher">
                                        <div class="controls">
                                            <select id="">
                                                <option id="client">Клиент</option>
                                                <option id="coach">Тренер</option>
                                                <option id="company">Компания</option>
                                            </select>
                                        </div><!-- /.controls -->
                                    </div><!-- /.language-switcher -->

                                    <!-- /.controls -->
                                </div>
                                <!-- /.control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="inputRegisterEmail">
                                        E-mail
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>

                                    <div class="controls">
                                        <input type="text" id="inputRegisterEmail">
                                    </div>
                                    <!-- /.controls -->
                                </div>
                                <!-- /.control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="inputRegisterPassword">
                                        Пароль
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>

                                    <div class="controls">
                                        <input type="text" id="inputRegisterPassword">
                                    </div>
                                    <!-- /.controls -->
                                </div>
                                <!-- /.control-group -->

                                <div class="control-group">
                                    <label class="control-label" for="inputRegisterRetype">
                                        Подтвердить пароль
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>

                                    <div class="controls">
                                        <input type="text" id="inputRegisterRetype">
                                    </div>
                                    <!-- /.controls -->
                                </div>
                                <!-- /.control-group -->

                                <div class="form-actions">
                                    <!--                    <input type="submit" value="Регистрация" class="btn btn-primary arrow-right">-->
                                    <a href="/admin/calendar-trainer" class="btn btn-primary arrow-right">Регистрация</a>
                                </div>
                                <!-- /.form-actions -->
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.span4-->

                <div class="span8">

                    <h2 class="page-header">Как это работает?</h2>

                    <div class="images row">
                        <div class="item span2">
                            <div class="decoration">
                                <img src="/assets-public/img/tmp/exercise2.png" alt=""/>
                            </div>
                            <h2>Для клиента</h2>
                            <ol class="desc-list">
                                <li>Найдите тренировку;</li>
                                <li>Выберите тренера;</li>
                                <li>Запишитесь на занятия!</li>
                            </ol>
                        </div><!-- /.item -->

                        <div class="item span2">
                            <div class="decoration coach">
                                <img src="/assets-public/img/tmp/dumbbell.png" alt=""/>
                            </div>
                            <h2>Для тренера</h2>
                            <ol class="desc-list">
                                <li>Укажите свои навыки;</li>
                                <li>Составьте расписание занятий;</li>
                                <li>Объявите набор!</li>
                            </ol>
                        </div><!-- /.item -->

                        <div class="item span2">
                            <div class="decoration club">
                                <img src="/assets-public/img/tmp/offices.png" alt=""/>
                            </div>
                            <h2>Для компании</h2>
                            <ol class="desc-list">
                                <li>Расскажите о своем клубе;</li>
                                <li>Предложите выгодные условия для тренеров;</li>
                                <li>Привлекайте новых клиентов!</li>
                            </ol>
                        </div><!-- /.item -->
                    </div><!-- /.row -->

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.login-register -->

    </div>
</div>