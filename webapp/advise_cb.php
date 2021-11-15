<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$id = $_POST['id'];
        $name = $_POST['name'];
        $advisor = $_POST['advisor'];

        if (!empty($id) && !empty($name)) {

            $sql = "INSERT INTO `clubs`(`id`, `name`, `advisor`, 'president') 
                    VALUES ('$id', '$name', '$advisor', 'NULL')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "You are now advising: " .$name. "<br>";
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
		<title>Advise a Club</title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "id" placeholder = 'Club ID'><br><br>
			<input type = "text" name = "name" placeholder = 'Club Name'><br><br>
            <input type = "text" name = "advisor" placeholder = 'Your Name '><br><br>
			<input type = "submit" name = "Add" value = "Advise Club">

		</form>
	</body>
</html>