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
$modified = $_POST['modified'];


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");
$query = "UPDATE `ftfl_book`.`users` SET `firstName` = '".$firstName."',
`lastName` = '".$lastName."' ,
`email` = '".$email."',
`password` = '".$password."',
`birthday` = '".$birthday."',
`gender` = '".$gender."',
`hobby` = '".$hobby."',
`favouriteFood` = '".$favouriteFood."',
`comment` = '".$comment."',
`modified` = '".$modified."'


WHERE `users`.`ID` = $ID;";

mysqli_query($link, $query);
header('location:list.php');
?>
<a href="list.php">Go to Home</a>