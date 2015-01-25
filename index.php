<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Lõputööde andmebaas</title>
    <link rel="stylesheet" href="assets/components/bootstrap-3.3.1/css/bootstrap.css">
    <script src="assets/js/jquery-2.1.3.js" type="text/javascript"></script>
    <script src="assets/js/myScript.js" type="text/javascript"></script>
    <?php require "system/db_controller.php"; ?>
</head>
<body>
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
                <li class="clickable active"><a href="index.php">Kodu</a></li>
                <li class="clickable"><a href="loputood.php">Lõputööd</a></li>
                <li class="clickable"><a href="calendar.php">Kalender</a></li>
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

<form method="post" class="form-horizontal">
    <fieldset>
        <div class="form-group">
            <label for="tasks" class="col-sm-2 control-label">Pealkiri*</label>

            <div class="col-sm-4">
                <input type="task_pealkiri" class="form-control" name="task_pealkiri" placeholder="dokumendi pealkiri">

                <p class="help-block">Täida, kui dokumendi tüübiks on lõputöö või proovitöö.</p>
            </div>
        </div>
        <div class="form-group">
            <label for="tasks" class="col-sm-2 control-label">Juhendaja eesnimi*</label>

            <div class="col-sm-4">
                <input type="task_juhendaja" class="form-control" name="task_juh_eesnimi"
                       placeholder="juhendaja eesnimi">
            </div>
        </div>
        <div class="form-group">
            <label for="tasks" class="col-sm-2 control-label">Juhendaja perekonnanimi*</label>

            <div class="col-sm-4">
                <input type="task_juhendaja" class="form-control" name="task_juh_perenimi"
                       placeholder="juhendaja perekonnanimi">
            </div>
        </div>
        <div class="form-group">
            <label for="tasks" class="col-sm-2 control-label">Tüüp*</label>

            <div class="col-sm-4">
                <input type="task_tyyp" class="form-control" name="task_tyyp" placeholder="vali dokumendi tüüp">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="col-sm-4">
                    <div class="form-group">
                        <!--                        <label for="exampleInputFile">File input</label>-->
                        <!--                        <input type="file" name="task_file">-->
                        <p class="help-block">* Kohustuslikud väljad</p>
                        <button class="btn btn-sml btn-primary" style="margin: 1px" type="submit" name="submit"
                                value="submit">Sisesta
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </fieldset>
</form>
<br>
<br>
<!--<a href="javascript: history.back()">Back</a>-->
</body>
</html>