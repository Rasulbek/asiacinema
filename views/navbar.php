<?php
   Session::init();
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <script src="<?php print URL?>public/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php print URL?>public/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php print URL?>public/js/myjquery.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="<?php print URL?>public/stylesheet/bootstrap/css/bootstrap-theme.min.css" >
    <link type="text/css" media="screen" rel="stylesheet" href="<?php print URL?>public/stylesheet/bootstrap/css/bootstrap.css" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
</head>
<body style="background: url('<?php echo URL?>public/img/bg-body.jpg'); color: white">

<div class="container">

<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: larger; ">
    <img width="100%" class="visible-lg visible-md" src="<?php print URL?>public/img/header.jpg">
    <div class="container-fluid" style="background-color: #505050;">
    <div class="navbar-header">
        <a class="navbar-brand" href="/" style="COLOR: #ffffff"><img style="margin-top: -3px; padding-right: 20px;padding-left: 10px" height="25px" src="<?php print URL?>public/img/logo.png"></a>
        <button class="navbar-toggle" type="button" data-target="#menu1" data-toggle="collapse" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse"   id="menu1">
        <ul class="nav navbar-nav">
            <li class=""><a style="COLOR: #ffffff" href="<?php print URL ?>index"> <img style="vertical-align: text-bottom" width="20px" src="<?php print URL?>public/img/home.png"> ГЛАВНАЯ</a></li>
            <li class=""><a style="COLOR: #ffffff" href="<?php print URL ?>timetable"><img style="vertical-align: text-bottom" width="20px" src="<?php print URL?>public/img/topics.png"> АФИША</a></li>
            <li class=""><a href="<?php print URL ?>services" style="COLOR: #ffffff"><img style="vertical-align: text-bottom" width="20px" src="<?php print URL?>public/img/services.png"> УСЛУГИ</a></li>
            <li class=""><a href="<?php print URL ?>about" style="COLOR: #ffffff"><img style="vertical-align: text-bottom" width="20px" src="<?php print URL?>public/img/about2.png"> О НАС</a></li>
        </ul>
    </div>
</div>
</nav>

<div style="padding-bottom: 180px;" class="visible-lg visible-md"></div>
<div style="padding-bottom: 50px;" class="visible-xs visible-sm"></div>
<div style="background: #000" class="col-xs-12 panel">