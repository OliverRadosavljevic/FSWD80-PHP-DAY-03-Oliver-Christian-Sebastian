<?php 

require_once 'action/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM user WHERE id = {$id}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title >Edit User</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update user</legend>

   <form action="action/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>First Name</th>
               <td><input type="text"  name="first_name" placeholder ="First Name" value="<?php echo $data['first_name'] ?>"  /></td>
           </tr >    
           <tr>
               <th>Last Name</th>
               <td><input type= "text" name="last_name"  placeholder="Last Name" value ="<?php echo $data['last_name'] ?>" /></td >
           </tr>
           <tr>
               <th >E-Mail</th>
               <td><input type ="email" name= "email-address" placeholder= "E-Mail" value= "<?php echo $data['email'] ?>" /></td>
           </tr>
           <tr>
               <th >Password</th>
               <td><input type ="password" name= "user-password" placeholder= "Password" value= "<?php echo $data['password'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button" >Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?> 