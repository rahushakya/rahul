<!-- Content Section Start -->
<div class="content-section">
<div class="container-liquid">
<div class="row">

    <div class="col-xs-12">

        <!-- BREADCRUMBS start -->
        <ul class="breadcrumb">
            <li><a href="certificates-manager">Сертификаты</a></li>
            <li class="active">Создание сертификата</li>
        </ul>
        <!-- BREADCRUMBS end -->

        <div class="sec-box">

            <header>

                <h2 class="heading">Создать сертификат</h2>

            </header>

            <div class="contents">
                <div class="table-box">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="col-md-4">1. Название сертификата</td>
                            <td class="col-md-8">
                                <select class="form-control" name="" id="selectPlace">
                                    <option>Выберите тип сертификата</option>
                                    <option value="">Другой</option>
                                    <option selected="selected" value="">Основной</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-4">2. Период действия</td>
                            <td class="col-md-8">
                                <div class="form-group form-period">
                                    <label for="period-start">С </label>
                                    <input type="text" name="period-start" placeholder="Укажите начало периода" class="form-control datepicker">
                                    <label for="period-stop">по</label>
                                    <input type="text" name="period-stop" placeholder="Укажите окончание периода" class="form-control datepicker">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-4">3. Место</td>
                            <td class="col-md-8">
                                <select class="form-control" name="" id="selectPlace">
                                    <option>Выберите место</option>
                                    <option selected="selected" value="">Клуб</option>
                                    <option value="">Открытая площадка</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-4">3. Название</td>
                            <td class="col-md-8">
                                <select class="form-control" name="" id="selectClub">
                                    <option>Выберите название</option>
                                    <option selected="selected" value="">Олимп на Дальневосточном</option>
                                    <option value="">Олимп на Кондратьевском</option>
                                    <option value="">Марсово Поле</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-4">4. Зона</td>
                            <td class="col-md-8">
                                <select class="form-control" name="" id="selectClub">
                                    <option>Выберите зону</option>
                                    <option value="">Бассейн</option>
                                    <option value="">Групповой зал</option>
                                    <option selected="selected" value="">Тренажерный зал</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-4">5. Время</td>
                            <td class="col-md-8">
                                <ul class="request-schedule">
                                    <li class="row">
                                        <div class="custom-radio-checkbox col-md-3">
                                            <input tabindex="1" type="checkbox" class="minimalcheckradios">
                                            <label>Понедельник</label>
                                        </div>
                                        <div class="col-md-9 request-schedule__time">
                                            <form>
                                                <label for="start">с</label>
                                                <input type="text" placeholder="напр. 16:00"/>
                                                <label for="start">до</label>
                                                <input type="text" placeholder="напр. 17:30"/>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="custom-radio-checkbox col-md-3">
                                            <input tabindex="1" type="checkbox" class="minimalcheckradios">
                                            <label>Вторник</label>
                                        </div>
                                        <div class="col-md-9 request-schedule__time">
                                            <form>
                                                <label for="start">с</label>
                                                <input type="text" placeholder="напр. 16:00"/>
                                                <label for="start">до</label>
                                                <input type="text" placeholder="напр. 17:30"/>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="custom-radio-checkbox col-md-3">
                                            <input tabindex="1" type="checkbox" class="minimalcheckradios">
                                            <label>Среда</label>
                                        </div>
                                        <div class="col-md-9 request-schedule__time">
                                            <form>
                                                <label for="start">с</label>
                                                <input type="text" placeholder="напр. 16:00"/>
                                                <label for="start">до</label>
                                                <input type="text" placeholder="напр. 17:30"/>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="custom-radio-checkbox col-md-3">
                                            <input tabindex="1" type="checkbox" class="minimalcheckradios">
                                            <label>Четверг</label>
                                        </div>
                                        <div class="col-md-9 request-schedule__time">
                                            <form>
                                                <label for="start">с</label>
                                                <input type="text" placeholder="напр. 16:00"/>
                                                <label for="start">до</label>
                                                <input type="text" placeholder="напр. 17:30"/>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="custom-radio-checkbox col-md-3">
                                            <input tabindex="1" type="checkbox" class="minimalcheckradios">
                                            <label>Пятница</label>
                                        </div>
                                        <div class="col-md-9 request-schedule__time">
                                            <form>
                                                <label for="start">с</label>
                                                <input type="text" placeholder="напр. 16:00"/>
                                                <label for="start">до</label>
                                                <input type="text" placeholder="напр. 17:30"/>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="custom-radio-checkbox col-md-3">
                                            <input tabindex="1" type="checkbox" class="minimalcheckradios">
                                            <label>Суббота</label>
                                        </div>
                                        <div class="col-md-9 request-schedule__time">
                                            <form>
                                                <label for="start">с</label>
                                                <input type="text" placeholder="напр. 16:00"/>
                                                <label for="start">до</label>
                                                <input type="text" placeholder="напр. 17:30"/>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="row">
                                        <div class="custom-radio-checkbox col-md-3">
                                            <input tabindex="1" type="checkbox" class="minimalcheckradios">
                                            <label>Воскресенье</label>
                                        </div>
                                        <div class="col-md-9 request-schedule__time">
                                            <form>
                                                <label for="start">с</label>
                                                <input type="text" placeholder="напр. 16:00"/>
                                                <label for="start">до</label>
                                                <input type="text" placeholder="напр. 17:30"/>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-4"></td>
                            <td class="col-md-8" colspan="3">
                                <button class="btn btn-success">Создать</button>
                                <button class="btn btn-danger">Отмена</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-box -->

                <div class="clearfix"></div>

            </div><!-- /.contents -->

        </div><!-- /.sec-box -->
    </div><!-- /.col-xs-12 -->

</div><!-- /.row -->
<!-- Row End -->
</div><!-- /.container-liquid -->
</div><!-- /.content-section -->
<!-- Content Section End -->
