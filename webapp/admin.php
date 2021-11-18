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
<form action = "view_classA.php" method = "get">
    <input type = "submit" value = "View Courses">
</form>
<form action = "view_p.php" method = "get">
    <input type = "submit" value = "View Professor">
</form>
<form action = "view_cbA.php" method = "get">
    <input type = "submit" value = "View Clubs">
</form>
<form action = "view_s.php" method = "get">
    <input type = "submit" value = "View Students">
</form>
<form action = "view_aA.php" method = "get">
    <input type = "submit" value = "View Advisors">
</form>
</body>

</html>
