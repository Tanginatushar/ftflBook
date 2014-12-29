<a href="list.php">Go to Home</a>

</br>
</br>

<?php
$ID = $_GET['ID'];
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");
$query = "select * from users WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
print_r($row);
?>
