<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $d_code = $_POST['d_code'];

        $sql2 = "SELECT * FROM professors WHERE id='$id'";
		$qry2 = mysqli_query($conn, $sql2);
		$count = mysqli_fetch_array($qry2);

        if ((!empty($id) && !empty($name) && !empty($email) && $count == 0)) {

            $sql = "INSERT INTO `professors`(`id`, `name`, `email`, `d_code`) 
                    VALUES ('$id', '$name', '$email', $d_code)";

            $qry = mysqli_query($conn, $sql);

            $sql1 = "INSERT INTO `login`(`id`, `username`, `password`, `role`) 
            VALUES ('$id', '$email', '$password', 'professor')";

            $qry1 = mysqli_query($conn, $sql1);
        
            if ($qry) {
                echo "New Professor has been added: " .$name. "<br>";
                echo "New Professor log in has been added for: " .$name. "<br>";
            }
        }

        else {
            echo "Professor ID is already taken: " .$id;
        }

	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Adding a New Professor</title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "id" placeholder = 'Professor ID'><br><br>
			<input type = "text" name = "name" placeholder = 'Professor Name'><br><br>
            <input type = "text" name = "email" placeholder = 'Professor Email'><br><br>
            <input type = "text" name = "password" placeholder = 'Professor Password'><br><br>
            <input type = "text" name = "d_code" placeholder = 'Department Code'><br><br>
			<input type = "submit" name = "Add" value = "Add New Professor">

		</form>
	</body>
</html>