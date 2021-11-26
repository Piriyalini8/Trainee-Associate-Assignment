<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbdata = 'exam';
$conn = mysqli_connect("$dbhost", "$dbuser", "", "$dbdata");

if (!$conn)
{
    echo "Database not connect";
} else
{
    //	echo"Database Connected";
}

?>