<?php require_once "core/base.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $url; ?>assets/css/style.css">
    <meta name="title" content="<?php echo $info["name"]?>">
    <meta name="description" content="<?php echo $info["description"]?>">
</head>
<body>
 
<nav>
    <a href="<?php echo $url; ?>index.php">Home</a>
    <a href="<?php echo $url; ?>about.php">About</a>
    <a href="<?php echo $url; ?>contact.php">Contact</a>
</nav>