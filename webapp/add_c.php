<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$number = $_POST['number'];
        $name = $_POST['name'];
        $p_name = $_POST['p_name'];

        if (!empty($number) && !empty($name) && !empty($p_name)) {

            $sql = "INSERT INTO `courses`(`number`, `name`, `p_name`) 
                    VALUES ('$number', '$name', '$p_name')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "New Course has been added: " .$name. "<br>";
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
		<title>Adding a New Course</title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "number" placeholder = 'Course Number'><br><br>
			<input type = "text" name = "name" placeholder = 'Course Name'><br><br>
            <input type = "text" name = "p_name" placeholder = 'Professor Name'><br><br>
			<input type = "submit" name = "Add" value = "Add New Course">

		</form>
	</body>
</html>