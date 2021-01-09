

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/seaching.css">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            <input name = "sr_no" type="text " placeholder="serial number"/> <br>
            <input type="submit" name="search" value="Search Serial Number">
        </form>
    </center>
</body>
</html>



<?php

$connection = mysqli_connect("localhost:3307","root","");
$db = mysqli_select_db($connection, "testing");
if(isset($_POST['search'])){
    $id = $_POST['sr_no'];
    $query = "SELECT * FROM checking where SRNO = '$id' ";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run)){
        ?>
        <form action = "" method = "POST">
            <input type="text"  name ="SRNO" value="<?php echo $row['SRNO'] ?>" />
            <input type="text"  name ="DATE" value="<?php echo $row['DATE'] ?>" />
            <input type="text"  name ="COURT NO." value="<?php echo $row['COURT NO.'] ?>" />
            <input type="text"  name ="CASE NO." value="<?php echo $row['JUDGE NAME'] ?>" />
            <input type="text"  name ="JUDGE NAME" value="<?php echo $row['JUDGE NAME'] ?>" />
            <input type="text"  name ="PARTY NAME" value="<?php echo $row['PARTY NAME'] ?>" />
            <input type="text"  name ="RES ADV" value="<?php echo $row['RES ADV'] ?>" />
            <input type="text"  name ="RES AOR" value="<?php echo $row['RES AOR'] ?>" />
            <input type="text"  name ="PET ADV" value="<?php echo $row['PET ADV'] ?>" />
            <input type="text"  name ="PET AOR" value="<?php echo $row['PET AOR'] ?>" />
        </form>
        <?php

        
    }
}

?>