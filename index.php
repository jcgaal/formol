<?php
  include 'session.php';
  $proveniencia = 'page-name'; //User Defined
  $adwords=strtolower($_REQUEST['cmpsrc']);
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nombre Landing</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Sweetalert -->
    <link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php include('the-form.php'); ?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="sweetalert-master/dist/sweetalert.min.js"></script>
    <script src="valida.js?ver=0.0.1" type="text/javascript"></script>
</body>

</html>
