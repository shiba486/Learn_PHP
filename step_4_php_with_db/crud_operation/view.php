<?php
include "connect_db.php"?>
<a href="./create.php">HOME</a>
<table border="1px" cellspacing="0" cellpadding="10px" >
   <tr>
        <th>Serial_No.</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Age</th>
        <th>Loaction</th>
        <th colspan="2">Action</th>
        
   </tr>

   <?php 
   $query = "SELECT * FROM user_info";
   $data = mysqli_query($conn,$query);
   $result = mysqli_num_rows($data);

   if($result){
    while ($row=mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td> <?php echo $row['id'];?> </td>
            <td> <?php echo $row['username'];?> </td>
            <td> <?php echo $row['email'];?> </td>
            <td> <?php echo $row['password'];?> </td>
            <td> <?php echo $row['age'];?> </td>
            <td> <?php echo $row['location'];?> </td>
            <td>
                <a href="update.php?id=<?php echo $row['id'];?>">Edit</a>
                
         </td>
         <td><a onclik="return confirm('Are You Sure To Delete?');" href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
        <?php
    }
    
   }else{
    ?>
    <tr>
        <td style="text-align: center;" colspan="7">NO DATA TO SHOW</td>
    </tr>
    
    <?php
   }


   
   ?>
</table>



