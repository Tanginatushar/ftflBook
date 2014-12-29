<?php
$ID = $_POST['ID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$year=$_POST['year'];
$month=$_POST['month'];
$dt=$_POST['dt'];
$birthday=$year.'-'.$month.'-'.$dt;


$gender = $_POST['gender'];
$hobby = $_POST['hobby'];
$favouriteFood = $_POST['favouriteFood '];
$comment = $_POST['comment'];
$created = $_POST['created'];





$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");
$query = "INSERT INTO `ftfl_book`.`users` (
`ID` ,
`firstName` ,
`lastName` ,
`email` ,
`password` ,
`birthday`,
`gender` ,
`hobby` ,
`favouriteFood` ,
`comment` ,
`created`
)
VALUES (
'$ID'  , '$firstName', '$lastName', '$email', '$password', '$birthday', '$gender', '$hobby', '$favouriteFood',
'$comment', NOW()
)";
mysqli_query($link, $query);

header('location:list.php');
?>