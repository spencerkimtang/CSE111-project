
<?php
	include("connection.php");

	if (isset($_POST['Delete'])) {

		$ID = $_POST['ID'];
        $name = $_POST['name'];

        if (!empty($ID) && !empty($name)) {

            $sql = "DELETE FROM `clubs` WHERE id='$ID' and name='$name'";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "Club has been added removed: " .$name. "<br>";
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

			<input type = "text" name = "ID" placeholder = 'Club ID'><br><br>
			<input type = "text" name = "name" placeholder = 'Club Name'><br><br>
			<input type = "submit" name = "Delete" value = "Remove Club">

		</form>
	</body>
</html>