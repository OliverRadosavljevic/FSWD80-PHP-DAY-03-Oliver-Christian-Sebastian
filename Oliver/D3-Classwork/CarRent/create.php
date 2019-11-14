<!DOCTYPE html>
<html>
<head>
   <title>CarSetup</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding: 10px 0px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Add Car</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Carname</th >
               <td><input  type="text" name="Carname"  placeholder="Carname" /></td >
           </tr>    
           <tr>
               <th>Cartype</th>
               <td><input  type="text" name= "Cartype" placeholder="Cartype" /></td>
           </tr>
           <tr>
               <th>Building-Year</th>
               <td><input type="text"  name="Building-Year" placeholder ="Building year" /></td>
           </tr>
           <tr>
               <td><button type ="submit">Add Car</button></td>
               <td ><a href= "index.php"><button  type="button">Back</button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>