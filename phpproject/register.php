<?php

$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$password =$_POST['password'];
$gender=$_POST ['gender'];
$con = @mysqli_connect('localhost','root','','pdata');
$query =  "insert into ptable values('$firstname', '$lastname','$email','$password','$gender')";
$result = mysqli_query($con, $query);

if($result)
{
    echo "data inserted sucessfully ";
}
else 
{
    echo "data not inserted sucessfully ";
}
?>


<html>
    <body>
        <?php
        if ($result==1)
        {
            ?>
        
    <center>   <h2>your first name is </h2><?php echo $firstname;?>
        <h2>your email is</h2><?php echo $email;?>
        <h2>Your Password is</h2><?php echo $password;?> </center> 
        <?php 
        }
  ?>
    </body>
</html>