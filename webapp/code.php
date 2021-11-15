<?php
session_start();
require_once "connection.php";

$message = "good";
echo $message;
$role = "";
if(isset($_POST["btnLogin"])){
    $username = $POST["username"];
    $password = $POST["password"];

    $query = "SELECT *
            FROM login
            WHERE username = '$username'
                AND password = '$password'";
    
    $result = mysqli_query($conn,$query);

    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            $role = $row["Role"];
        }
    }
    else {
        $message = "Invalid Username or Password";
    }

}
echo "good";

?>
