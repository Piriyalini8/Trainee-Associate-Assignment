<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exam</title>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form action="#" method="POST" role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="Username" type="text"
                                       autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="Password" type="password">
                            </div>
                            <div class="checkbox">

                            </div>

                            <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php
include('dbconn.php');
session_start();
session_destroy();
session_start();

@$username = $_POST['Username'];
@$password = trim($_POST['Password']);
@$ecpassword = md5($password);
@$signin = $_POST['submit'];

if (isset($signin))
{

    if ($username && $password)
    {

        $sun = $conn->query("SELECT * FROM user WHERE Username='$username'");
        $numrows = mysqli_num_rows($sun);

        if ($numrows != 0)
        {
            while ($row = $sun->fetch_array())
            {
                $dbusername = $row['username'];
                $dbpassword = $row['password'];
                $dbemail = $row['email'];
                $dbid = $row['id'];
                $dbname = $row['name'];
            }

            if ($username == $dbusername && $ecpassword == $dbpassword)
            {
                header('Location: /loginn/index.php');
                $_SESSION['username'] = $dbusername;
                $_SESSION['id'] = $dbid;
                $_SESSION['name'] = $dbname;
                $_SESSION['email'] = $dbemail;

            } else
                echo '<script>alert("Password is worrng")</script>';

        } else
        {
            echo '<script>alert("User does not exist")</script>';

        }

    } else
    {
        echo '<script>alert("please enter Username and Password")</script>';
    }
}

?>