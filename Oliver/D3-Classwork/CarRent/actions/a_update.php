<?php 

require_once 'db_connect.php';

if ($_POST) {
   $CN = $_POST['Carname'];
   $CT = $_POST['Cartype'];
   $BY = $_POST[ 'BuildingYear'];

   $id = $_POST['id'];

   $sql = "UPDATE cars SET CarName = '$CN', CarType = '$CT', BuildYear = '$BY' WHERE id = {$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?> 