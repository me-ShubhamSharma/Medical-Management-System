<?php

$username = "root";
$password = "";
$server = "localhost";
$db = "medicaldb";

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {
    // echo "Connection Succefull";
?>
    <script>
        alert("Connection successfull")
    </script>
<?php
} else {
    echo "Connection not made";
}
?>