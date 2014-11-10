<div class="content-section">

    <div class="container-liquid">

        <div class="row">

            <!-- ACCOUNT DETAILS start -->
            <div class="col-xs-12">

                <!-- BREADCRUMBS start -->
                <ul class="breadcrumb">
                    <li><a href="#">Стартовая</a></li>
                    <li><a href="#">Путь</a></li>
                    <li class="active">Текущая страница</li>
                </ul>
                <!-- BREADCRUMBS end -->

                <div class="sec-box">
                    <header>
                        <h2 class="heading">Редактирование профиля</h2>
                    </header>
                    <div class="contents">
                        <div class="table-box">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="col-md-4">Имя</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label">Поле не заполнено</label>
                                            <input type="text" placeholder="Имя" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Фамилия</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label">Поле не заполнено</label>
                                            <input type="text" placeholder="Фамилия" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Дата рождения</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label">Поле не заполнено</label>
                                            <input type="text" placeholder="Укажите дату рождения" class="form-control" id="datepicker">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Пол</td>
                                    <td class="col-md-8">
                                        <div class="input-group radio-pair form-group">
                                            <label class="control-label validation-label">Пол не выбран</label>
                                            <form>
                                                <label>Мужской</label><input type="radio" name="gender" value="male"/>
                                                <label>Женский</label><input type="radio" name="gender" value="female"/>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Email</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label" for="email">Поле не заполнено</label>
                                            <input type="text" placeholder="напр. ivanov@mymail.com" class="form-control" id="email" name="email">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Телефон</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label" for="phone">Поле не заполнено</label>
                                            <input type="text" placeholder="напр. (123) 1234567" class="form-control" id="phone">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Услуги</td>
                                    <td class="col-md-8">
                                        <div class="tag-input-container">

                                            <div class="tag-container">
                                                <div class="tag-body">
                                                    <span class="label label-default label-tag">Бокс</span>
                                                    <i class="fa fa-close"></i>
                                                </div>
                                                <div class="tag-body">
                                                    <span class="label label-default label-tag">Бодибилдинг</span>
                                                    <i class="fa fa-close"></i>
                                                </div>
                                            </div><!-- /.tag-container -->

                                            <div class="input-container">
                                                <input type="text" placeholder="Укажите Ваши услуги..."/>
                                            </div><!-- /.input-container -->

                                        </div><!-- /.tag-input-container -->
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Фото</td>
                                    <td class="col-md-8 avatar-container">
                                        <img src="../assets-admin/images/no-image.png" alt="Avatar"/>
                                        <button class="btn btn-sm btn-success">Загрузить</button>
                                        <button class="btn btn-sm btn-danger">Удалить</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4"></td>
                                    <td class="col-md-8">
                                        <button class="btn btn-primary btn-save">Сохранить изменения</button>
                                        <button class="btn btn-danger">Отмена</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div><!-- /.col-xs-12 -->
            <!-- ACCOUNT DETAILS end -->

            <!-- PERSONAL DATA start -->
            <div class="col-xs-12">
                <div class="sec-box">
                    <header>
                        <h2 class="heading">Расскажите о себе</h2>
                    </header>
                    <div class="contents">
                        <div class="table-box">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="col-md-4">
                                        <p>О себе</p>
                                        <p class="profile-help-text ">* Подробная информация о себе повышает доверие клиентов!</p></td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label" for="about">Поле не заполнено</label>
                                            <textarea name="about" id="about" class="personal-description form-control" placeholder="Расскажите о себе подробнее..."></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">
                                        <p>Ваши достижения</p>
                                        <p class="profile-help-text ">* Подробная информация о ваших достижениях повышает интерес клиента к Вам!</p>
                                    </td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label" for="achievements">Поле не заполнено</label>
                                            <textarea name="achievements" id="achievements" class="personal-description form-control" placeholder="Расскажите о ваших достижениях..."></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4">Ваше образование</td>
                                    <td class="col-md-8">
                                        <div class="form-group">
                                            <label class="control-label validation-label" for="education">Поле не заполнено</label>
                                            <input name="education" type="text" placeholder="Укажите информацию о вашем образовании..." class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-4"></td>
                                    <td class="col-md-8">
                                        <button class="btn btn-primary btn-save">Сохранить изменения</button>
                                        <button class="btn btn-danger">Отмена</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div><!-- /.col-xs-12 -->
            <!-- PERSONAL DATA end -->

            <!-- PERSONAL DOCUMENTS start -->
            <div class="col-xs-12">
                <div class="sec-box">
                    <header>
                        <h2 class="heading">Мои документы</h2>
                    </header>
                    <div class="contents">
                        <div class="table-box">
                            <table class="table table-documents">
                                <thead>
                                <tr>
                                    <th colspan="5" class="col-md-12">
                                        <button class="btn btn-success">Загрузить новый документ</button>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-1">
                                        <figure>
                                            <img src="../assets-admin/images/document.jpg" alt="Document"/>
                                        </figure>
                                    </td>
                                    <td class="col-md-4">Свидетельство о рождении</td>
                                    <td class="col-md-2">svid.jpg</td>
                                    <td class="col-md-2">200 Кб.</td>
                                    <td class="col-md-3">
                                        <button class="btn btn-danger">Удалить</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-1">
                                        <figure>
                                            <img src="../assets-admin/images/document.jpg" alt="Document"/>
                                        </figure>
                                    </td>
                                    <td class="col-md-4">ИНН</td>
                                    <td class="col-md-2">inn.jpg</td>
                                    <td class="col-md-2">135 Кб.</td>
                                    <td class="col-md-3">
                                        <button class="btn btn-danger">Удалить</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-md-1">
                                        <figure>
                                            <img src="../assets-admin/images/document.jpg" alt="Document"/>
                                        </figure>
                                    </td>
                                    <td class="col-md-4">Паспорт</td>
                                    <td class="col-md-2">pasport.jpg</td>
                                    <td class="col-md-2">230 Кб.</td>
                                    <td class="col-md-3">
                                        <button class="btn btn-danger">Удалить</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.table-box -->

                        <div class="clearfix"></div>

                    </div><!-- /.contents -->
                </div><!-- /.sec-box -->
            </div><!-- /.col-xs-12 -->
            <!-- PERSONAL DOCUMENTS end -->

        </div><!-- /.row -->
        <!-- Row End -->

    </div><!-- /.container-liquid -->

</div><!-- /.content-section -->