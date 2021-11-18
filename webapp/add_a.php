<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $d_code = $_POST['d_code'];

        $sql2 = "SELECT * FROM advisor WHERE id='$id'";
		$qry2 = mysqli_query($conn, $sql2);
		$count = mysqli_fetch_array($qry2);

        if ((!empty($id) && !empty($name) && !empty($email) && $count == 0)) {

            $sql = "INSERT INTO `advisor`(`id`, `name`, `email`, `d_code`) 
                    VALUES ('$id', '$name', '$email', $d_code)";

            $qry = mysqli_query($conn, $sql);

            $sql1 = "INSERT INTO `login`(`id`, `username`, `password`, `role`) 
            VALUES ('$id', '$email', '$password', 'advisor')";

            $qry1 = mysqli_query($conn, $sql1);
        
            if ($qry) {
                echo "New Advisor has been added: " .$name. "<br>";
                echo "New Advisor log in has been added for: " .$name. "<br>";
            }
        }

        else {
            echo "Advisor ID is already taken: " .$id;
        }

	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Adding a New Advisor</title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "id" placeholder = 'Advisor ID'><br><br>
			<input type = "text" name = "name" placeholder = 'Advisor Name'><br><br>
            <input type = "text" name = "email" placeholder = 'Advisor Email'><br><br>
            <input type = "text" name = "password" placeholder = 'Advisor Password'><br><br>
            <input type = "text" name = "d_code" placeholder = 'Department Code'><br><br>
			<input type = "submit" name = "Add" value = "Add New Advisor">

		</form>
	</body>
</html>