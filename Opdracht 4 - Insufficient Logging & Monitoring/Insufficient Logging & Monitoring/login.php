<?php

include "db.php";

$email = $_POST["email"];
$password = $_POST["password"];

$myConn = new DB;

$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

$result = $myConn->executeSQL($query);

gettype($result);

if (!empty($result)) {
	echo "E-mail: " . $email . "<br>" ."Password: " . $password;
    echo "<br> Login is succes <br>";   
} else {
    echo "<br> Invalid login! <br>";
}

?>