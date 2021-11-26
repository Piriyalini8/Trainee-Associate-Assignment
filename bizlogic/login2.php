<?php include('dbconn.php'); ?>
<?php
 session_start();

@$username = $_POST['username'];
@$password = $_POST['pwd'];



@$signin = $_POST['submit'];

if ($signin)
{

   
if($username && $password)
{

$sun = $conn->query("SELECT * FROM login WHERE Username='$username'");
         
    $numrows=mysqli_num_rows($sun);
    
     if ($numrows != 0)
     {
           while($row=$sun->fetch_array())
                 {
                    $dbusername = $row['Username'];
                    $dbpassword = $row['Password'];
                 }
                 
                 if($username==$dbusername && $password == $dbpassword)
                 {
                    header('Location: LoginPage/abc.php');
                    $_SESSION['username']=$dbusername;

                 }
                 else
                     $error="Password OR Username is worrng";
     }
     else
         {$error =  "User doesn't exist";}

}

 else
  {$error = "please enter username and password";}
}


?>