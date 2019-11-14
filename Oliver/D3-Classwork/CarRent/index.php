<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>RentACarSetup</title>

   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>

<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add Car</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Carname</th>
               <th>Cartype</th>
               <th>Building-year</th>
               <th>Rented</th>
               <th>Edit/Delete</th>

           </tr>
       </thead>
       <tbody>
            <?php
           $sql = "SELECT * FROM cars ORDER BY Rented";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['CarName']."</td>
                       <td>" .$row['CarType']."</td>
                       <td>" .$row['BuildYear']."</td>
                       <td>" .$row['Rented']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
</div>

</body>
</html>