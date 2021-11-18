<?php 
   session_start();
   $name = $_SESSION['username'];
   echo "Welcome " .$name. "<br>";
?>

<!DOCTYPE html>
<html> 

<head>
    <meta charset="utf-8">
    <title>Student Database</title>
</head>
    
<body>
<form action = "view_c.php" method = "get">
    <input type = "submit" value = "View Schedule">
</form>
<form action = "view_cbY.php" method = "get">
    <input type = "submit" value = "View You Clubs Your In">
</form>
<form action = "view_class.php" method = "get">
    <input type = "submit" value = "View Classes">
</form>
<form action = "view_cb.php" method = "get">
    <input type = "submit" value = "View Clubs">
</form>
<form action = "views_cbM.php" method = "get">
    <input type = "submit" value = "View Clubs Members">
</form>
<form action = "view_a.php" method = "get">
    <input type = "submit" value = "View Your Advisor">
</form>
</body>

</html>
