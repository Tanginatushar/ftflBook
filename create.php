title> FTFL book </title>

<body>
<form action ="add.php"method="post">
    <h3>FTFL Book Registration Form: </h3></br>

    ID        :<input type="number"name="ID"size="30"></br>
    First Name:<input type="text"name="firstName"size="30"></br>
    Last Name: <input type="text"name="lastName"size="30"></br>
    email    : <input type="text"name="email"size="30"></br>
    Password : <input type="password"name="password"size="30"></br>
    Birthday :

    </td><td  align=left  >
        <select name=year value=''>Select year

            <option value='1986'>1986</option>
            <option value='1987'>1987</option>
            <option value='1988'>1988</option>
            <option value='1989'>1989</option>

        </select>
    </td>
    <tr><td  align=left  >
            <select name=month value=''>Select Month
                <option value='01'>January</option>
                <option value='02'>February</option>
                <option value='03'>March</option>
                <option value='04'>April</option>
                <option value='05'>May</option>
                <option value='06'>June</option>
                <option value='07'>July</option>
                <option value='08'>August</option>
                <option value='09'>September</option>
                <option value='10'>October</option>
                <option value='11'>November</option>
                <option value='12'>December</option>
            </select>
        </td>
    </tr>
    </td><td  align=left  >
        <select name=dt value='' >
            <option value='01'>01</option>
            <option value='02'>02</option>
            <option value='03'>03</option>
            <option value='04'>04</option>
            <option value='05'>05</option>
            <option value='06'>06</option>
            <option value='07'>07</option>
            <option value='08'>08</option>
            <option value='09'>09</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
        </select>
    </td>


    </br>
    Gender   : </br>
    <input type="radio" name="gender"value="male">Male</br>
    <input type="radio" name="gender"value="female">Female</br>
    </br>

    Hobby    :</br>
    <select name="hobby">
        <option>select hobby</option>
        <option>photography</option>
        <option>reading</option>
        <option>gardening</option>
        <option>others</option>

    </select></br> </br>


    favourite Food: </br>
    <input type="checkbox" name="favouriteFood"value="continental"/>Continental</br>
    <input type="checkbox" name="favouriteFood"value="Thai"/>Thai</br>
    <input type="checkbox" name="favouriteFood"value="mexican"/>Mexican</br>
    <input type="checkbox" name="favouriteFood"value="others"/>Others</br></br>


    Comment  :
    <textarea rows="5"cols="10"name="comment"></textarea>
    </br></br>


    </br>
    <input type="submit"value="Submit">
</form>


</body>