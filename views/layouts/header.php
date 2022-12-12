<?php
use \App\models\Category;
use \App\models\Product;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Insurance Company</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap style -->
        <link id="callCss" rel="stylesheet" href="/template/themes/shop/bootstrap.min.css" media="screen"/>
        <link href="/template/themes/css/base.css" rel="stylesheet" media="screen"/>
        <!-- Bootstrap style responsive -->
        <link href="/template/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="/template/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
        <!-- Google-code-prettify -->
        <link href="/template/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
        <!-- fav and touch icons -->
        <link type="image/png" sizes="16x16" rel="icon" href="..\..\template\bootstrap\img\favlogo.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/themes/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/themes/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/themes/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/template/themes/images/ico/apple-touch-icon-57-precomposed.png">
        <style type="text/css" id="enject"></style>
        <!-- CSS only -->
    </head>
    <body>
    
        <!-- Header -->
        <div id="header">
            <div class="container" style="width: 100%; background: radial-gradient(#f69d3c, #3f87a6); border:none; display: flex; flex-direction: row; align-items:center; justify-content:space-between;" >
                <div id="welcomeLine" class="row" >
                    <!-- <div class="span6" style="color: white; text-align: left; padding-left:5px;">Добро пожаловать!<strong> <?php echo \App\models\User::getUserName(); ?></strong></div> -->
                <!-- Navbar -->
                <div id="logoArea" class="navbar" style="">
                    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-inner" style="background:#2B3A55; border-radius: 50px;">
                        <a class="brand" href="/" style="color:white;">Insurance Company<p class="logo" style="font-size: 50px; color: white; padding-top: 20px"></p></a>
                        <ul id="topMenu" class="nav pull-right">
                            <li class=""><a href="/contact">О сайте</a></li>
                            <li class=""><a href="/cart">Корзина<i class="icon-shopping-cart icon-white"></i><?php echo \App\components\Cart::countItems();?></a></li>
                            <li class=""><a href="/cabinet">Личный кабинет</a></li>
                            <li class="">
                                <?php if (\App\models\User::isGuest()): ?>
                                    <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-success">Логин</span></a>
                                <?php else: ?>
                                    <a href="/logout/" role="button" style="padding-right:0"><span class="btn btn-succes">Выйти</span></a>
                                <?php endif; ?>
                                <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h3>Войти</h3>
                                    </div>
                                    
        <!--                                 modal                        -->
                                    <div class="modal-body">
                                        <form class="form-horizontal loginFrm" method="post" action="/login/">
                                            <div class="control-group">
                                                <input type="text" name="email" id="inputEmail" placeholder="Email">
                                            </div>
                                            <div class="control-group">
                                                <input type="password" name="password" id="inputPassword" placeholder="Password">
                                            </div>
                                            <div class="control-group">
                                                <label class="checkbox">
                                                    <input type="checkbox"> Запомнить меня
                                                </label>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-success">Войти</button>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
                                        </form>
                                    </div>
        <!--                                /modal                        -->
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
