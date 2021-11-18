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
<form action = "view_As.php" method = "get">
    <input type = "submit" value = "View Students">
</form>
<form action = "views_cbMA.php" method = "get">
    <input type = "submit" value = "View Clubs Memebers">
</form>
</body>

</html>
