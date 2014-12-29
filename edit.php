<a href="list.php">Go to Home</a>

<?php
$ID = $_GET['ID'];

$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl_book");
$query = "select * from users WHERE ID = $ID";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

list($year, $month, $dt) = explode("-",$row['birthday']);
?>
<form action="update.php" method="post">
    <h3> Edit FTFL Book Registration: </h3></br>


    <input type="hidden" name="ID" value="<?php echo $row['ID'];?>" /></br>
    First Name:<input type="text" name="firstName" value="<?php echo $row['firstName'];?>" /></br>
    Last Name:<input type="text" name="lastName" value="<?php echo $row['lastName'];?>" /></br>
    email:<input type="text" name="email" value="<?php echo $row['email'];?>" /></br>
    Password:<input type="password" name="password" value="<?php echo $row['password'];?>" /></br>
    Birthday:
    </td><td  align=left  >
        <select name=year value=''>Select year
            <option value='1986' <?php if($year == '1986') echo "selected"?>>1986</option>
            <option value='1987' <?php if($year == '1987') echo "selected"?>>1987</option>
            <option value='1988' <?php if($year == '1988') echo "selected"?>>1988</option>
            <option value='1989' <?php if($year == '1989') echo "selected"?>>1989</option>
        </select>
    </td>

    <tr><td  align=left  >
            <select name=month value=''>Select Month
                <option value='01' <?php if($month == '01') echo "selected"?>>January</option>
                <option value='02' <?php if($month == '02') echo "selected"?>>February</option>
                <option value='03' <?php if($month == '03') echo "selected"?>>March</option>
                <option value='04' <?php if($month == '04') echo "selected"?>>April</option>
                <option value='05' <?php if($month =='05') echo "selected"?>>May</option>
                <option value='06' <?php if($month =='06') echo "selected"?>>June</option>
                <option value='07' <?php if($month =='07') echo "selected"?>>July</option>
                <option value='08' <?php if($month =='08') echo "selected"?>>August</option>
                <option value='09' <?php if($month =='09') echo "selected"?>>September</option>
                <option value='10' <?php if($month =='10') echo "selected"?>>October</option>
                <option value='11' <?php if($month =='11') echo "selected"?>>November</option>
                <option value='12' <?php if($month =='12') echo "selected"?>>December</option>
            </select>
        </td>
    </tr>
    </tr>
    </td><td  align=left  >
        <select name=dt value='' >
            <option value='01' <?php if($dt=='01') echo "selected"?>>01</option>
            <option value='02' <?php if($dt=='02') echo "selected"?>>02</option>
            <option value='03' <?php if($dt=='03') echo "selected"?>>03</option>
            <option value='04' <?php if($dt=='04') echo "selected"?>>04</option>
            <option value='05' <?php if($dt=='05') echo "selected"?>>05</option>
            <option value='06' <?php if($dt=='06') echo "selected"?>>06</option>
            <option value='07' <?php if($dt=='07') echo "selected"?>>07</option>
            <option value='08' <?php if($dt=='08') echo "selected"?>>08</option>
            <option value='09' <?php if($dt=='09') echo "selected"?>>09</option>
            <option value='10' <?php if($dt=='10') echo "selected"?>>10</option>
        </select>
    </td>
    </br>
    Gender:
    <input type="radio" name="gender" <?php if ($row['gender']=='male')echo "checked";?> value="male" />Male
    <input type="radio" name="gender" <?php if ($row['gender']=='female')echo "checked"; ?> value="female" />Female

    </br>
    Hobby:
    <select name = "hobby">
        <option value="photography" <?php if($row['hobby']=='photography') echo "selected"?>> Photography </option>
        <option value="reading" <?php if($row['hobby']=='reading') echo "selected"?>> Reading </option>
        <option value="gardening" <?php if($row['hobby']=='gardening') echo "selected"?>>Gardening </option>
        <option value="others" <?php if($row['hobby']=='others') echo "selected"?>>Others </option>

    </select>
    </br>

    Favourite food:<input type="text" name="favouriteFood" value="<?php echo $row['favouriteFood'];?>" /></br>


    Comment:
    <textarea rows="5"cols="10"name="comment"value="comment" <?php if ($row['comment']=='comment') echo "selected"?>></textarea>


    </br>
    </br>

    <button type="submit">Update</button>
</form>