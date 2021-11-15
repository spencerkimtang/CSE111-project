<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        if (!empty($id) && !empty($name) && !empty($email)) {

            $sql = "INSERT INTO `professors`(`id`, `name`, `email`) 
                    VALUES ('$id', '$name', '$email')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "Professor has been added: " .$name. "<br>";
            }
        }

        else {
            echo "All Fields must be filled";
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
			<input type = "submit" name = "Add" value = "Add New Professor">

		</form>
	</body>
</html>