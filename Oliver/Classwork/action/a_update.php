<?php 

require_once './db_connect.php';

if ($_POST) {
   $fname = $_POST['first_name'];
   $lname = $_POST['last_name'];
   $email = $_POST['email-address'];
   $pw = $_POST['user-password'];

   $id = $_POST['id'];

   $sql = "UPDATE user SET first_name = '$fname', last_name = '$lname', email = '$email', password = '$pw' WHERE id = {$id}" ;
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