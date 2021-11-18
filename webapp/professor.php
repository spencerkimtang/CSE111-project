<?php 
   session_start();
   $name = $_SESSION['username'];
   echo "Welcome " .$name;
?>

<!DOCTYPE html>
<html> 

<head>
    <meta charset="utf-8">
    <title>Student Database</title>
</head>
    
<body>
<form action = "view_classP.php" method = "get">
    <input type = "submit" value = "View Classes">
</form>
<form action = "view_cbP.php" method = "get">
    <input type = "submit" value = "View Clubs">
</form>
</body>

</html>
