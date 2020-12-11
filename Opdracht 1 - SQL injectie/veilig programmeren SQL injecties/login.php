<?php

include "db.php";

$username = $_POST["username"];
$password = $_POST["password"];

$myConn = new DB;

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$result = $myConn->executeSQL($query);

gettype($result);

if (!empty($result)) {
	echo "Username: " . $username . "<br>" ."Password: " . $password;
    echo "<br> Login as $username <br>";
} else {
    echo "<br> Invalid login! <br>";
}

?>