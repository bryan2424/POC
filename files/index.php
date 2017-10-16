<?php
include ("../scriptphp/backend.php");
include ("../scriptphp/frontend.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>titre</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../bootstrap/clockpicker/bootstrap-clockpicker.min.css">
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- nav -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">POC</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="events.php">liste des rdv</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- form -->
        <div  class="container">
            <h1>POC</h1>
            <div id="main">
            <form method="POST" action="confirmation.php">
                <div class="col-xs-2" style="margin-top: 20px;">
                    <label for="titre" style="margin-top: 8px;">Titre :</label>
                </div>
                <div class="col-xs-9" style="margin-top: 20px;">
                    <div class="input-group date">
                        <input name="titre" type="text" class="form-control">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </span>
                    </div>
                </div>
                <div class="col-xs-2" style="margin-top: 20px;">
                    <label for="date" style="margin-top: 8px;">Date :</label>
                </div>
                <div class="col-xs-9" style="margin-top: 20px;">
                    <div class="input-group date">
                        <input name="date" type="date" class="form-control">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <br/>
                <div class="col-xs-2" style="margin-top: 20px;">
                    <label for="date" style="margin-top: 8px;">Heure Debut :</label>
                </div>
                <div class="col-xs-9" style="margin-top: 20px;">
                    <div class="input-group date">
                        <input name="StartTime" id="clockStart" class="form-control"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
                <br/>
                <div class="col-xs-2" style="margin-top: 20px;">
                    <label for="date" style="margin-top: 8px;">Heure Fin :</label>
                </div>
                <div class="col-xs-9" style="margin-top: 20px;">
                    <div class="input-group date">
                        <input name="EndTime" id="clockEnd" class="form-control"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                    </div>
                </div>
                <br>
                <div class="col-xs-12" style="margin-top: 20px;">
                    <input type="submit" name="Valider" class="form-control"/>
                </div>
            </form>
        </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../bootstrap/clockpicker/bootstrap-clockpicker.min.js" type="text/javascript"></script>
        <script type="text/javascript">


            $('#clockStart').clockpicker({
                autoclose: true
            });

            $('#clockEnd').clockpicker({
                autoclose: true
            });

        </script>
    </body>
</html>