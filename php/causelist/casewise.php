

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
            <input name = "sr_no" type="text " placeholder="serial number"/> <br>
            <input type="submit" name="search" value="Search Serial Number">
        </form>
    </center>
</body>
</html>



<?php

$connection = mysqli_connect("sql302.epizy.com","epiz_27651152","zZtEcYqlYJQeM","epiz_27651152_democauselist");
$db = mysqli_select_db($connection, "testing");
if(isset($_POST['search'])){
    $id = $_POST['sr_no'];
    $query = "SELECT * FROM checking where SRNO = '$id' ";
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
                <th>Date</th>
                <th><?php echo $row['DATE'] ?></th>
            </tr>
            <tr>
                <th>Court Number</th>
                <th><?php echo $row['COURT NO.'] ?></th>
            </tr>
            <tr>
                <th>Judge Name</th>
                <th><?php echo $row['JUDGE NAME'] ?></th>
            </tr>
            <tr>
                <th>Party Number</th>
                <th><?php echo $row['PARTY NAME'] ?></th>
            </tr>
            <tr>
                <th>Respondent Advocate</th>
                <th><?php echo $row['RES ADV'] ?></th>
            </tr>
            <tr>
                <th>Respondent AOR Number</th>
                <th><?php echo $row['RES AOR'] ?></th>
            </tr>
            <tr>
                <th>Petitioner Advocate</th>
                <th><?php echo $row['PET ADV'] ?></th>
            </tr>
            <tr>
                <th>Petitioner AOR Number</th>
                <th><?php echo $row['PET AOR'] ?></th>
            </tr>
            
        </table>
        </div>
        <?php

        
    }
}
if($id != $query){
    ?>
    <p>No result found</p>
    <?php
}

?>