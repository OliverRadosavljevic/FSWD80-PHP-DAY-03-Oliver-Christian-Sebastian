<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM cars WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit Car</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       /* table  tr th {
           padding-top: 20px;
       } */
   </style>

</head>
<body>

<fieldset>
   <legend>Update Car</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Carname</th>
               <td><input type="text"  name="Carname" placeholder ="Carname" value="<?php echo $data['CarName'] ?>"  /></td>
           </tr>    
           <tr>
               <th>Cartype</th>
               <td><input type= "text" name="Cartype"  placeholder="Cartype" value ="<?php echo $data['CarType'] ?>" /></td >
           </tr>
           <tr>
               <th >Building Year</th>
               <td><input type ="text" name= "BuildingYear" placeholder= "Building Year" value= "<?php echo $data['BuildYear'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit">Save Changes</button></td>
               <td><a  href= "index.php"><button  type="button">Back</button></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?> 