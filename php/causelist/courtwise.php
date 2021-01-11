

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../css//seaching.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>

<body>
    <center>
    <h3>Case Number Wise</h3>
        <form action="" method="POST">
        <label>Case Nature</label>
        <select name="date" id="cars">
            <option value="2021-01-01">2021-01-04</option>
            <option value="2021-01-01">2021-01-03</option>
            <option value="2021-01-01">2021-01-02</option>
            <option value="2021-01-01">2021-01-01</option>
        </select>
        <br><br>
        <label>Court Number</label>
            <input name = "courtno" type="text " placeholder="serial number"/> <br>
            <label>Year</label>
            <input name = "year" type="text " placeholder="serial number"/> <br>
            <input type="submit" name="search" value="Search">
        </form>
    </center>
</body>
</html>



<?php

$connection = mysqli_connect("localhost:3307","root","");
$db = mysqli_select_db($connection, "testing");
if(isset($_POST['search'])){
    $id1 = $_POST['date'];
    $id2 = $_POST['caseno'];
    $id3 = $_POST['year'];
    $query = "SELECT * FROM checking where YEARREG = '$id3' AND DATECASE = '$id1' AND CASENO = '$id2'";
    $query_run = mysqli_query($connection,$query);
    ?>
        <?php
    
    while($row = mysqli_fetch_array($query_run)){
                ?>
        <div class="container">
        <table>
            <tr>
                <th>Serial Number</th>
                <th><?php echo $row['SRNO'] ?></th>
            </tr>
            <tr>
                <th>Case  Number</th>
                <th><?php echo $row['CASENO'] ?></th>
            </tr>
            <tr>
                <th>Date</th>
                <th><?php echo $row['DATECASE'] ?></th>
            </tr>
            <tr>
                <th>Court Number</th>
                <th><?php echo $row['COURTNO'] ?></th>
            </tr>
            <tr>
                <th>Judge Name</th>
                <th><?php echo $row['JUDGENAME'] ?></th>
            </tr>
            <tr>
                <th>Party Number</th>
                <th><?php echo $row['PARTYNAME'] ?></th>
            </tr>
            <tr>
                <th>Respondent Advocate</th>
                <th><?php echo $row['RESADV'] ?></th>
            </tr>
            <tr>
                <th>Respondent AOR Number</th>
                <th><?php echo $row['RESAOR'] ?></th>
            </tr>
            <tr>
                <th>Petitioner Advocate</th>
                <th><?php echo $row['PETADV'] ?></th>
            </tr>
            <tr>
                <th>Petitioner AOR Number</th>
                <th><?php echo $row['PETAOR'] ?></th>
            </tr>
            <br>
            
        </table>
        </div>
                <?php
             
    }
}


?>