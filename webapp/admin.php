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
<form action = "remove_c.php" method = "get">
    <input type = "submit" value = "Remove Course">
</form>
<form action = "view_p.php" method = "get">
    <input type = "submit" value = "View Professor">
</form>
<form action = "view_cb.php" method = "get">
    <input type = "submit" value = "View Clubs">
</form>
<form action = "add_cb.php" method = "get">
    <input type = "submit" value = "Add New Club">
</form>
<form action = "view_s.php" method = "get">
    <input type = "submit" value = "View Students">
</form>
<form action = "add_s.php" method = "get">
    <input type = "submit" value = "Add New Student">
</form>
<form action = "view_a.php" method = "get">
    <input type = "submit" value = "View Advisors">
</form>
<form action = "add_a.php" method = "get">
    <input type = "submit" value = "Add New Advisors">
</form>
</body>

</html>
