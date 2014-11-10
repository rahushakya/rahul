<div class="content-section">

    <div class="container-liquid">

        <div class="row">

            <!-- PLACE TYPE start -->
            <div class="col-xs-12">

                <!-- BREADCRUMBS start -->
                <ul class="breadcrumb">
                    <li><a href="places-company">Места</a></li>
                    <li class="active">Клуб "Олимп"</li>
                </ul>
                <!-- BREADCRUMBS end -->

                <div class="sec-box">

                    <header>
                        <h2 class="heading">"Олимп"</h2>
                    </header>

                    <div class="contents">

                        <div class="table-box">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="col-md-4">Тип места</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label">Не выбран тип места</label>
                                            <select name="gender" id="gender" class="form-control select-25">
                                                <option>Выберите тип места</option>
                                                <option selected="selected">Клуб</option>
                                                <option>Открытая площадка</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Название</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label">Поле не заполнено</label>
                                            <input type="text" placeholder="Укажите название нового места..." class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Адрес</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label">Поле не заполнено</label>
                                            <input type="text" placeholder="Укажите адрес места..." class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.table-box -->

                        <div class="clearfix"></div>

                    </div><!-- /.contents -->
                </div><!-- /.sec-box -->

            </div><!-- /.col-xs-12 -->
            <!-- PLACE TYPE end -->

            <!-- PLACE INFO start -->
            <div class="col-xs-12">

                <div class="sec-box">

                    <header>
                        <h2 class="heading">Дополнительно</h2>
                    </header>

                    <div class="contents">

                        <div class="table-box">
                            <table class="table">
                            <tbody>
                            <tr>
                                <td class="col-md-4">Площадь</td>
                                <td class="col-md-8" colspan="3">
                                    <div class="form-group">
                                        <label class="control-label validation-label">Поле не заполнено</label>
                                        <input type="text" placeholder="Укажите площадь места (м.кв.)" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Рядом с метро</td>
                                <td class="col-md-8" colspan="3">
                                    <div class="input-group radio-pair">
                                        <form>
                                            <label>Да</label><input type="radio" name="metro" value="metro-yes"/>
                                            <label>Нет</label><input type="radio" name="metro" value="metro-no"/>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-md-4">
                                    <p>Описание</p>
                                <td class="col-md-8" colspan="3">
                                    <div class="form-group">
                                        <label class="control-label validation-label">Поле не заполнено</label>
                                        <textarea name="about" id="about" class="personal-description form-control" placeholder="Предоставьте подробное описание места занятий..."></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-md-4">Дополнительные услуги</td>
                                <td class="col-md-8" colspan="3">
                                    <!-- Если услуг нет: -->
                                    <!-- <p>Нет</p>-->
                                    <!-- Если услуги есть: -->
                                    <ul class="cell-list">
                                        <li>Бесплатные полотенца <span class="glyphicon glyphicon-remove-circle"></span></li>
                                        <li>Сауна <span class="glyphicon glyphicon-remove-circle"></span></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="col-md-4">
                                    <p>Добавить услуги</p>
                                    <p class="profile-help-text">* Выберите дополнительные услуги.</p>
                                </td>
                                <td class="col-md-8" colspan="3">
                                    <div class="input-group add-zone">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Выбрать <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Бесплатные полотенца</a></li>
                                                <li><a href="#">Салон красоты</a></li>
                                                <li><a href="#">Сауна</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Или введите название новой услуги...">
                                    </div><!-- /.add-zone -->
                                    <div class="input-group add-zone">
                                        <button class="btn btn-success">Добавить</button>
                                    </div><!-- /.add-zone -->
                                </td>
                            </tr>
                            </tbody>
                            </table>
                        </div><!-- /.table-box -->

                        <div class="clearfix"></div>

                    </div><!-- /.contents -->
                </div><!-- /.sec-box -->

            </div><!-- /.col-xs-12 -->
            <!-- PLACE INFO end -->

            <!-- ZONE INFO start -->
            <div class="col-xs-12">

                <div class="add-record-btn">
                    <button class="btn btn-success">Добавить зону</button>
                </div>

                <div class="sec-box">

                    <header>
                        <h2 class="heading">Зоны</h2>
                    </header>

                    <div class="contents">

                    <div class="table-box">

                        <table class="table table-list">
                        <tbody>
                        <tr>
                            <td class="col-md-9" colspan="2">
                                <a class="table-list__link" href="zone-edit">Бассейн</a>
                            </td>
                            <td class="col-md-3 text-right">
                                <button class="btn btn-small btn-danger">Удалить</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-9" colspan="2">
                                <a class="table-list__link" href="zone-edit">Велозал</a>
                            </td>
                            <td class="col-md-3 text-right">
                                <button class="btn btn-small btn-danger">Удалить</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-9" colspan="2">
                                <a class="table-list__link" href="zone-edit">Зал групповых занятий</a>
                            </td>
                            <td class="col-md-3 text-right">
                                <button class="btn btn-small btn-danger">Удалить</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-9" colspan="2">
                                <a class="table-list__link" href="zone-edit">Тренажерный зал</a>
                            </td>
                            <td class="col-md-3 text-right">
                                <button class="btn btn-small btn-danger">Удалить</button>
                            </td>
                        </tr>
                        </tbody>
                        </table>

<!--                        <table class="table">-->
<!--                        <tbody>-->
<!--                        <tr>-->
<!--                            <td class="col-md-4">-->
<!--                                <p>Новые зоны и услуги</p>-->
<!--                                <p class="profile-help-text">* Вы можете выбрать зоны и услуги из списка или создать новые.</p>-->
<!--                            </td>-->
<!--                            <td class="col-md-8" colspan="3">-->
<!--                                <div class="input-group add-zone">-->
<!--                                    <div class="input-group-btn">-->
<!--                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">1. Выберите зону <span class="caret"></span></button>-->
<!--                                        <ul class="dropdown-menu" role="menu">-->
<!--                                            <li><a href="#">Бассейн</a></li>-->
<!--                                            <li><a href="#">Велозал</a></li>-->
<!--                                            <li><a href="#">Групповые занятия</a></li>-->
<!--                                            <li><a href="#">Теннисный корт</a></li>-->
<!--                                            <li><a href="#">Тренажеры</a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <input type="text" class="form-control" placeholder="Или введите название новой зоны...">-->
<!--                                </div><!-- /.add-zone -->
<!--                                <div class="input-group add-zone">-->
<!--                                    <div class="input-group-btn">-->
<!--                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">2. Выберите услугу <span class="caret"></span></button>-->
<!--                                        <ul class="dropdown-menu" role="menu">-->
<!--                                            <li><a href="#">Аква-аэробика</a></li>-->
<!--                                            <li><a href="#">Бодибилдинг</a></li>-->
<!--                                            <li><a href="#">Бокс</a></li>-->
<!--                                            <li><a href="#">Дзюдо</a></li>-->
<!--                                            <li><a href="#">Йога</a></li>-->
<!--                                        </ul>-->
<!--                                    </div>-->
<!--                                    <input type="text" class="form-control" placeholder="Или введите название новой услуги...">-->
<!--                                </div><!-- /.add-zone -->
<!--                                <div class="input-group add-zone">-->
<!--                                    <button class="btn btn-success">3. Добавить!</button>-->
<!--                                </div><!-- /.add-zone -->
<!--                            </td>-->
<!--                        </tr>-->
<!--                        </tbody>-->
<!--                        </table>-->

                    </div><!-- /.table-box -->

                        <div class="clearfix"></div>

                    </div><!-- /.contents -->
                </div><!-- /.sec-box -->

            </div><!-- /.col-xs-12 -->
            <!-- ZONE INFO end -->

        </div><!-- /.row -->
        <!-- Row End -->

        <div class="save-record-btn">
            <button class="btn btn-success btn-save">Сохранить изменения</button>
            <button class="btn btn-danger">Отмена</button>
        </div><!-- /.save-record-btn -->

    </div><!-- /.container-liquid -->

</div><!-- /.content-section -->