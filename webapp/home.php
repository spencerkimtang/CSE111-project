<?php 
   session_start();
   include "connection.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
          <?php 
            if ($_SESSION['role'] == 'admin') {
                header("Location: admin.php");
            }
            else if ($_SESSION['role'] == 'student'){ 
                header("Location: student.php");
            }
            else if ($_SESSION['role'] == 'professor'){ 
                header("Location: professor.php");
            }
            else if($_SESSION['role'] == 'advisor'){ 
                header("Location: advisor.php");
            }?>
</body>
</html>
<?php }
else{
	header("Location: index.php");
} ?>