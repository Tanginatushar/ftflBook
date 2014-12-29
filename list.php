<?php


$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");

$query = "select * from users";

$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

?>

<a href="list.php">Go to Home</a>
<ul>

    <li><a href="create.html">Create New </a> </li>
</ul>


<table border="1" width="70%">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>email</td>
        <td>Password</td>
        <td>Birthday</td>
        <td>Gender</td>
        <td>Hobby</td>
        <td>Favourite Food</td>
        <td>Comment</td>
        <td>Created</td>


        <td>Action</td>
        <td>Action</td>
        <td>Action</td>
    </tr>
    <?php
    foreach($result as $row){
        ?>

        <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['firstName']?></td>
            <td><?php echo $row['lastName']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td><?php echo $row['birthday']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['hobby']?></td>
            <td><?php echo $row['favouriteFood']?></td>
            <td><?php echo $row['comment']?></td>
            <td><?php echo $row['created']?></td>



            <td> <a href="edit.php?ID=<?php echo $row['ID']?>">Edit</a></td>
            <td> <a href="delete.php?ID=<?php echo $row['ID']?>">Delete</a> </td>
            <td><a href="view.php?ID=<?php echo $row['ID']?>">view</a> </td>
        </tr>

    <?php
    }
    ?>


</table>
