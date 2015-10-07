<?php
   Session::init();
   $title = Session::get('title');
   $actt = Session::get('active');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <script src="<?php print URL?>public/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php print URL?>public/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php print URL?>public/js/myjquery.js" type="text/javascript"></script>
    <link type="text/css" rel="stylesheet" href="<?php print URL?>public/stylesheet/bootstrap/css/bootstrap-theme.min.css" >
    <link rel="shortcut icon" href="<?php print URL?>public/img/services.png" type="image/png">
    <link type="text/css" media="screen" rel="stylesheet" href="<?php print URL?>public/stylesheet/bootstrap/css/bootstrap.css" >
    <link href="<?php print URL?>public/stylesheet/bootstrap/css/font-awesome.css" rel="stylesheet">
    <meta property="og:url"           content="http://www.asiacinema.uz/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Asia Cinema Tashkent" />
    <meta property="og:description"   content="Севременный 3D Кинотеатр" />
    <meta property="og:image"         content="http://www.asiacinema.uz/public/img/header.jpg" />
    <meta name="google-site-verification" content="PVDEU2-PI1gbewrEr9vsCqo2MYvBUY0bal3R2JxMG0g" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title><?php echo $title?> - Asia Cinema</title>
</head>

<body style="background: url('<?php echo URL?>public/img/bg-body.jpg'); color: white">
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    !function (d, id, did, st) {
        var js = d.createElement("script");
        js.src = "https://connect.ok.ru/connect.js";
        js.onload = js.onreadystatechange = function () {
            if (!this.readyState || this.readyState == "loaded" || this.readyState == "complete") {
                if (!this.executed) {
                    this.executed = true;
                    setTimeout(function () {
                        OK.CONNECT.insertShareWidget(id,did,st);
                    }, 0);
                }
            }};
        d.documentElement.appendChild(js);
    }(document,"ok_shareWidget","http://www.asiacinema.uz/","{width:145,height:20,st:'straight',sz:20,ck:1}");
</script>


<div class="container">

<nav class="navbar navbar-inverse navbar-fixed-top" style="font-size: larger; ">
    <img width="100%" class="visible-md visible-lg visible-sm" src="<?php print URL?>public/img/header.jpg">

    <div class="container-fluid" style=" background: url('<?php print URL?>public/img/header_menu.jpg');background-repeat: no-repeat; background-color: #505050;">
<!--Bu yerda social weblar boladi-->
        <div class="navbar-header">
<!--        <a class="navbar-brand" href="/" style="COLOR: #ffffff"><img style="margin-top: -3px; padding-right: 20px;padding-left: 10px" height="25px" src="--><?php //print URL?><!--public/img/logo.png"></a>-->
        <button class="navbar-toggle" type="button" data-target="#menu1" data-toggle="collapse" >
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" style="margin-right: -20px; margin-left: -20px; padding-left: 20px; background-color: #505050;" id="menu1">
        <ul class="nav navbar-nav">
            <li class="<?php if($actt=="index")echo "active"?>"><a style="COLOR: #ffffff" href="<?php print URL ?>index"> <img style="vertical-align: text-bottom" width="20px" src="<?php print URL?>public/img/home.png"> ГЛАВНАЯ</a></li>
            <li class="<?php if($actt=="timet")echo "active"?>"><a style="COLOR: #ffffff" href="<?php print URL ?>timetable"><img style="vertical-align: text-bottom" width="20px" src="<?php print URL?>public/img/topics.png"> АФИША</a></li>
            <li class="<?php if($actt=="services")echo "active"?>"><a href="<?php print URL ?>services" style="COLOR: #ffffff"><img style="vertical-align: text-bottom" width="20px" src="<?php print URL?>public/img/services.png"> УСЛУГИ</a></li>
            <li class="<?php if($actt=="about")echo "active"?>"><a href="<?php print URL ?>about" style="COLOR: #ffffff"><img style="vertical-align: text-bottom" width="20px" src="<?php print URL?>public/img/about2.png"> О НАС</a></li>
        </ul>
    </div>
</div>
</nav>

<div style="padding-bottom: 180px;" class="visible-lg visible-md"></div>
<div style="padding-bottom: 47px;" class="visible-xs visible-sm"></div>

<div style="background: #000" class="col-xs-12 panel">