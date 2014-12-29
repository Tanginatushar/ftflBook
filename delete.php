<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");

$query = "DELETE FROM `ftfl_book`.`users` WHERE `users`.`ID` = $ID";

mysqli_query($link, $query);

header('location:list.php');
?>