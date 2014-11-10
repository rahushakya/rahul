<!-- Inbox Start -->
<div class="emailbox">
    <header>
        <h2>Написать письмо</h2>
        <div class="emailoptions">
            <a href="#" class="send"><i class="glyphicon glyphicon-envelope">&nbsp;</i>Отправить</a>
            <a href="#" class="cancel"><i class="glyphicon glyphicon-remove">&nbsp;</i>Отмена</a>
        </div>
        <div class="clearfix"></div>
    </header>
    <div class="structure-table">
        <div class="structure-row">

            <nav class="email-nav">

                <?= $this->render('messages/nav-company') ?>

            </nav>

            <div class="emailslist">
                <table class="table table-hover">
                    <tbody>
                    <tr>
                        <td class="description">Кому</td>
                        <td class="inputfields">
                            <input type="text" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td class="description">Тема</td>
                        <td class="inputfields">
                            <input type="text" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td class="description">Прикрепить файл</td>
                        <td class="inputfields">
                            <input type="file" />
                        </td>
                    </tr>
                    <tr>
                        <td class="inputfields" colspan="2">
                            <script type="text/javascript" src="../assets-admin/js/wysihtml5-0.3.0_rc2.min.js"></script>
                            <script type="text/javascript" src="../assets-admin/js/bootstrap-wysihtml5-0.0.2.js"></script>
                            <script>
                                $(document).ready(function(){
                                    $('#some-textarea').wysihtml5();
                                });
                            </script>
                            <textarea id="some-textarea" class="form-control" placeholder="Введите текст ..."></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <footer>
                    <div class="emailoptions">
                        <a href="#" class="send"><i class="glyphicon glyphicon-envelope">&nbsp;</i>Отправить</a>
                        <a href="#" class="cancel"><i class="glyphicon glyphicon-remove">&nbsp;</i>Отмена</a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
<!-- Inbox End -->