<?php 

require_once 'db_connect.php';

if ($_POST) {
   $CN = $_POST['Carname'];
   $CY = $_POST['Cartype'];
   $BY = $_POST[ 'Building-Year'];

   $sql = "INSERT INTO cars (CarName, CarType, BuildYear) VALUES ('$CN', '$CY', '$BY')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?> 