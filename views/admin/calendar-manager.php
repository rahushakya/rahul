<div class="content-section">

    <div class="container-liquid">
        <div class="row">
            <div class="col-xs-12">

                <!-- BREADCRUMBS start -->
                <ul class="breadcrumb">
                    <li class="active">Календарь</li>
                </ul>
                <!-- BREADCRUMBS end -->

                <div class="sec-box">

                    <header>

                            <h2 class="heading">Календарь</h2>

                            <div class="fg-calendar-options clearfix">
                                <div class="col-md-2 fg-calendar-options__select">
                                    <select class="form-control" name="" id="selectClub">
                                        <option selected="selected">Выберите место</option>
                                        <option value="">Место 1</option>
                                        <option value="">Место 2</option>
                                        <option value="">Место 3</option>
                                    </select>
                                </div><!-- /.fg-calendar-options__select -->
                                <div class="col-md-2 fg-calendar-options__select">
                                    <select class="form-control" name="" id="selectClub">
                                        <option>Выберите зону</option>
                                        <option value="">Бассейн</option>
                                        <option value="">Теннисный корт</option>
                                        <option value="" selected="selected">Тренажерный зал</option>
                                    </select>
                                </div><!-- /.fg-calendar-options__select -->
                            </div><!-- /.fg-calendar-options -->

                    </header>

                    <div class="contents">
                        <div class="fullcalendar-box">
                            <script type="text/javascript" src='../assets-admin/js/jquery-ui.custom.min.js'></script>
                            <script type="text/javascript" src='../assets-admin/js/fullcalendar.min.js'></script>
                            <script type="text/javascript" src='../assets-admin/js/fullcalendar.js'></script>
                            <script type="text/javascript" src='../assets-admin/js/calendar-popup.js'></script>

                            <!-- MANAGER EVENTS start -->
                            <div class="manager-events">
                                <h5>Заявка на зону (день + время)</h5>
                                <div class="manager-events__body">
                                    <p class="manager-events__name">Ирина Петрова</p>
                                    <p class="manager-events__title"><strong>Зона</strong>: Бассейн</p>
                                    <p class="manager-events__title">Аква-аэробика</p>
                                    <table class="manager-events__table">
                                        <tr class="is-selected">
                                            <td>Понедельник</td>
                                            <td>14:00 - 15:30</td>
                                        </tr>
                                        <tr>
                                            <td>Вторник</td>
                                            <td>-</td>
                                        </tr>
                                        <tr class="is-selected">
                                            <td>Среда</td>
                                            <td>08:00 - 09:00</td>
                                        </tr>
                                        <tr>
                                            <td>Четверг</td>
                                            <td>-</td>
                                        </tr>
                                        <tr class="is-selected">
                                            <td>Пятница</td>
                                            <td>18:00 - 20:00</td>
                                        </tr>
                                        <tr class="is-selected">
                                            <td>Суббота</td>
                                            <td>10:00 - 12:00</td>
                                        </tr>
                                        <tr>
                                            <td>Воскресенье</td>
                                            <td>-</td>
                                        </tr>
                                    </table>

                                    <div class="manager-events__controls">
                                        <button class="btn btn-sm btn-success">Принять</button>
                                        <a href="/compose.html" class="btn btn-sm btn-danger">Отклонить</a>
                                    </div><!-- /.manager-events__controls -->

                                </div><!-- /.manager-events__body -->
                            </div><!-- /.manager-events -->

                            <div class="manager-events manager-events-2">
                                <h5>Заявка на зону (день)</h5>
                                <div class="manager-events__body">
                                    <p class="manager-events__name">Арнольд Шварценеггер</p>
                                    <p class="manager-events__title"><strong>Зона</strong>: Тренажерный зал</p>
                                    <p class="manager-events__title">Бодибилдинг</p>
                                    <table class="manager-events__table">
                                        <tr class="is-selected">
                                            <td>Понедельник</td>
                                        </tr>
                                        <tr>
                                            <td>Вторник</td>
                                        </tr>
                                        <tr class="is-selected">
                                            <td>Среда</td>
                                        </tr>
                                        <tr>
                                            <td>Четверг</td>
                                        </tr>
                                        <tr class="is-selected">
                                            <td>Пятница</td>
                                        </tr>
                                        <tr>
                                            <td>Суббота</td>
                                        </tr>
                                        <tr>
                                            <td>Воскресенье</td>
                                        </tr>
                                    </table>

                                    <div class="manager-events__controls">
                                        <button class="btn btn-sm btn-success">Принять</button>
                                        <a href="/compose.html" class="btn btn-sm btn-danger">Отклонить</a>
                                    </div><!-- /.manager-events__controls -->

                                </div><!-- /.manager-events__body -->
                            </div><!-- /.manager-events -->
                            <!-- MANAGER EVENTS end -->

                            <!-- CALENDAR BODY start -->
                            <div class="calendar-container dragables">
                                <div id="managerCalendar" class="full-calendar"></div>
                            </div><!-- /.calendar-container -->

                            <div class="clearfix"></div>
                            <!-- CALENDAR BODY end -->

                        </div><!-- /.fullcalendar-box -->
                    </div><!-- /.contents -->

                </div><!-- /.sec-box -->
            </div>
        </div>
        <!-- Row End -->
    </div>

</div><!-- /.content-section -->