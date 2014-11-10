<div class="span3">
    <div class="property-filter pull-right">
        <div class="content">
            <h4>НеЁйти место</h4>
            <h4>Город</h4>
            <form method="get" action="?">
                <div class="location control-group">
                    <div class="controls">
                        <select id="inputLocation">
                            <option id="malibu">Санкт-Петербург</option>
                            <option id="palo-alto">Москна</option>
                        </select>
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->

                <div class="type control-group">
                    <label class="control-label" for="inputType">
                        Типместа
                    </label>
                    <div class="controls">
                        <select id="inputType">
                            <option id="apartment">Торговый Центр</option>
                            <option id="condo">Бизнес-Центр</option>
                            <option id="condo">Склад</option>
                            <option id="condo">Сервисная площадка</option>
                        </select>
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->

                <!-- Цены -->

                <div class="price-from control-group">
                    <label class="control-label" for="inputPriceFrom">
                        Price from
                    </label>
                    <div class="controls">
                        <input type="text" id="inputPriceFrom" name="inputPriceFrom">
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->

                <div class="price-to control-group">
                    <label class="control-label" for="inputPriceTo">
                        Price to
                    </label>
                    <div class="controls">
                        <input type="text" id="inputPriceTo" name="inputPriceTo">
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->

                <div class="price-value">
                    <label class="control-label price-control-label">
                        Стоимость аренды 
                    </label>
                    <span class="from"></span><!-- /.from -->
                    -
                    <span class="to"></span><!-- /.to -->
                    РУблей 
                </div><!-- /.price-value -->

                <div class="price-slider">
                </div><!-- /.price-slider -->

                <!-- Advanced Search -->
                <div class="advanced control-group">
                    <a href=""></a>
                </div><!-- /.control-group -->

                <div class="beds control-group">
                    <label class="control-label" for="inputBeds">
                        Формат
                    </label>
                    <div class="controls">
                        <select id="inputBeds">
                            <option id="11">Индивид.</option>
                            <option id="21">Групповые</option>
                            <option id="31">Все</option>
                        </select>
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->

                <div class="baths control-group">
                    <label class="control-label" for="inputBaths">
                        Пол
                    </label>
                    <div class="controls">
                        <select id="inputBaths">
                            <option id="1">Мужчина</option>
                            <option id="2">Женщина</option>
                            <option id="3">Все</option>
                        </select>
                    </div><!-- /.controls -->
                </div><!-- /.control-group -->

                <!-- Submit Button -->
                <div class="form-actions">
                    <a class="btn btn-primary btn-large temp-link" href="/public/results">Найти</a>
                    <!--                Delete line above and uncomment line below when real search will work -->
                    <!--                <input type="submit" value="Найти" class="btn btn-primary btn-large"> -->
                </div><!-- /.form-actions -->

            </form>
        </div><!-- /.content -->
    </div><!-- /.property-filter -->
</div><!-- /.span3 -->