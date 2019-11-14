<?php require_once '../CarRent/actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
   <title>RentACarSetup</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

       html{
       	background-color: darkgray;
       }

   </style>

</head>
<body style="background-color: darkgray">

<div class ="manageUser">
   <table  border="1" cellspacing= "0" cellpadding="0" class="table table-dark">
       <thead>
           <tr>
               <th scope="col">Carname</th>
               <th scope="col">Cartype</th>
               <th scope="col">Building-year</th>
               <th scope="col">Rent</th>
           </tr>
       </thead>
       <tbody>
            <?php
           $sql = "SELECT * FROM cars WHERE Rented = 'false'";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                       <td>" .$row['CarName']."</td>
                       <td>" .$row['CarType']."</td>
                       <td>" .$row['BuildYear']."</td>
                       <td>
                           <a href='a_rent.php?id=" .$row['id']."'><button type='button' class='btn btn-light'>Rent</button></a>
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