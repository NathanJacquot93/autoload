<!DOCTYPE html>

<html lang="en">

 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="vieqport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php

require 'class/Autoloader.php';

Autoloader::register();

$form = new BootstrapForm($_POST);

?>

<form action="#">
    <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
    ?>
</form>

</body>
</html>
