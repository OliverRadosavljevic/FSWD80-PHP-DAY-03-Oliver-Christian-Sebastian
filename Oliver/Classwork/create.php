<!DOCTYPE html>
<html>
<head>
   <title>Register</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding: 10px 0px ;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Register</legend>

   <form  action="action/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>First Name: </th >
               <td><input  type="text" name="first_name"  placeholder="First Name" /></td >
           </tr>    
           <tr>
               <th>Last Name: </th>
               <td><input  type="text" name= "last_name" placeholder="Last Name" /></td>
           </tr>
           <tr>
               <th>E-Mail: </th>
               <td><input type="email"  name="email-address" placeholder ="E-Mail"/></td>
           </tr>
           <tr>
               <th>Password: </th>
               <td><input type="password"  name="user-password" placeholder ="Password"/></td>
           </tr>
           <tr>
               <td><button type ="submit">Submit</button></td>
               <td ><a href= "./index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset>

</body>
</html>