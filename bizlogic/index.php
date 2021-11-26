<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-body">
                    <h1>Welcome</h1>
                    <p>
                        <?php
                        echo $_SESSION['id'] . '<br>';
                        echo $_SESSION['name'] . '<br>';
                        echo $_SESSION['username'] . '<br>';
                        echo $_SESSION['email'];
                        ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div><a href="logout.php">logout</a></div>


</body>
</html>
