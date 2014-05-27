<?php
    require_once "dependencies.php";   
    
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>
            <?php
                echo(CSettings::$applicationName . " - " . CSettings::$applicationVersion);
            ?>
        </title>

        <!-- include bootstrap -->
        <link type="text/css" rel="stylesheet" href="res/css/bootstrap.css">

        <!-- include our .less style - ii compilat de less.js-->

        <link rel="stylesheet/less" type="text/css" href="res/css/style.less" />

        <!-- jquery? -->
        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
        <script src="res/js/jquery.min.js"></script>

        <!-- less compiler -->
        <script src="res/js/less-1.6.1.min.js"></script>

    </head>
    <body>
        <?php
            require_once 'gui/header.php';
            require_once 'gui/contents.php';
            require_once 'gui/footer.php';
        ?>
    </body>
</html>
