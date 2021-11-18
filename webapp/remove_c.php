
<?php
	include("connection.php");

	if (isset($_POST['Delete'])) {

		$number = $_POST['number'];
        $name = $_POST['name'];

        if (!empty($number) && !empty($name)) {

            $sql = "DELETE FROM `courses` WHERE number='$number' and name='$name'";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
				$sql1 = "DELETE FROM `takes` WHERE c_number='$number'";
				$qry1 = mysqli_query($conn, $sql1);
				echo "Course has been removed: " .$name. "<br>";
				echo "Students has been removed from: " .$name. "<br>";
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
		<title>Removing a Course</title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "number" placeholder = 'Course Number'><br><br>
			<input type = "text" name = "name" placeholder = 'Course Name'><br><br>
			<input type = "submit" name = "Delete" value = "Remove Course">

		</form>
	</body>
</html>