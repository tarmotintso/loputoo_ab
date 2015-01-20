<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Lõputööde andmebaas</title>
    <link rel="stylesheet" href="assets/components/bootstrap-3.3.1/css/bootstrap.css">
    <link rel="stylesheet" href="assets/components/bootstrap-3.3.1/css/calendar_style.css"/>
    <script src="assets/js/jquery-2.1.3.js" type="text/javascript"></script>
    <script src="assets/js/myScript.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="assets/components/bootstrap-3.3.1/js/calendar.js"></script>
    <?php require "system/db_controller.php"; ?>
</head>
<body>

<?php require_once "system/database.php"; ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Lõputööde andmebaas</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="clickable"><a href="index.php">Kodu</a></li>
                <li class="clickable"><a href="loputood.php">Lõputööd</a></li>
                <li class="clickable active"><a href="calendar.php">Kalender</a></li>
                <li class="clickable"><a href="login.php">Logi sisse</a></li>
            </ul>
            <!--            <ul class="nav navbar-nav navbar-right">-->
            <!--                <li><a href="#">Default</a></li>-->
            <!--                <li><a href="#">Static top</a></li>-->
            <!--                <li class="active"><a href="#">Fixed top <span class="sr-only">(current)</span></a></li>-->
            <!--            </ul>-->
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
<br>
<br>
<br>
<!-- Siia läheb kalendri body osa -->

<div class="form-group"
<form class="form-horizontal">
    <div class="jquery-calendar">
    </div>

</form>
</div>

<!--
<div><h2>calendar 2</h2></div>
<div class="jquery-calendar"></div>
</div>
<div>
<div><h2>Date-Picker</h2></div>
<div><h3>Date Picker<h3></div>
<input class="date-picker" type="text"/>
<div>
    <p> sub text here </p>
    <p> this should appear right below input field </p>
</div>
<div><h3>Date Picker with default date<h3></div>
<input class="date-picker" type="text" value="2013-8-1"/>
-->
<br>
<br>
<!--<a href="javascript: history.back()">Back</a>-->
</body>
</html>