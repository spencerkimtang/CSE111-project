<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql2 = "SELECT * FROM students WHERE id='$id'";
		$qry2 = mysqli_query($conn, $sql2);
		$count = mysqli_fetch_array($qry2);

        if ((!empty($id) && !empty($name) && !empty($email) && $count == 0)) {

            $sql = "INSERT INTO `students`(`id`, `name`, `email`) 
                    VALUES ('$id', '$name', '$email')";

            $qry = mysqli_query($conn, $sql);

            $sql1 = "INSERT INTO `login`(`id`, `username`, `password`, `role`) 
            VALUES ('$id', '$email', '$password', 'student')";

            $qry1 = mysqli_query($conn, $sql1);
        
            if ($qry) {
                echo "New Student has been added: " .$name. "<br>";
                echo "New Student log in has been added for: " .$name. "<br>";
            }
        }

        else {
            echo "Student ID is already taken: " .$id;
        }

	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Adding a New Student</title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "id" placeholder = 'Student ID'><br><br>
			<input type = "text" name = "name" placeholder = 'Student Name'><br><br>
            <input type = "text" name = "email" placeholder = 'Student Email'><br><br>
            <input type = "text" name = "password" placeholder = 'Student Password'><br><br>
			<input type = "submit" name = "Add" value = "Add New Student">

		</form>
	</body>
</html>