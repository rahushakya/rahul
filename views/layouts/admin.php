<?php $this->beginPage() ?>

<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<link rel="shortcut icon" href="../assets-admin/img/favicon.png" type="image/png">

<title>Панель управления ФитГид</title>

<!--// Stylesheets //-->
<link href="../assets-admin/css/style.css" rel="stylesheet" media="screen" />
<link href="../assets-admin/css/bootstrap.css" rel="stylesheet" media="screen" />
<link href="../assets-admin/css/bootstrap.vertical-tabs.css" rel="stylesheet" media="screen" />
<link href="../assets-admin/css/jquery-ui.min.css" rel="stylesheet" media="screen" />
<link href="../assets-admin/css/jquery-ui.theme.min.css" rel="stylesheet" media="screen" />
<link href="../assets-admin/css/font-awesome.min.css" rel="stylesheet" media="screen" />
<link href="../assets-admin/css/custom.css" rel="stylesheet" media="screen" />
<link href="../assets-admin/css/media.css" rel="stylesheet" media="screen" />

<!--// Javascript //-->
<script type="text/javascript" src="../assets-admin/js/jquery.js"></script>
<script type="text/javascript" src="../assets-admin/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../assets-admin/js/i18n/datepicker-ru.js"></script>
<script type="text/javascript" src="../assets-admin/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="../assets-admin/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets-admin/js/jquery.accordion.js"></script>
<script type="text/javascript" src="../assets-admin/js/jquery.custom-scrollbar.min.js"></script>
<script type="text/javascript" src="../assets-admin/js/icheck.min.js"></script>
<script type="text/javascript" src="../assets-admin/js/selectnav.min.js"></script>
<script type="text/javascript" src="../assets-admin/js/functions.js"></script>

<!-- GOOGLE MAP -->
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true&amp;#038;ver=3.8.1"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body>

    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="structure-row">

            <?= $content ?>

        </div><!-- /.structure-row -->

    </div><!-- /.wrapper -->
    <!-- Wrapper End -->

</body>
</html>

<?php $this->endPage() ?>