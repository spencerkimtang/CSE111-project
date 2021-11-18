<?php
    session_start();
	include("connection.php");

	if (isset($_POST['Add'])) {

        $p_id = $_SESSION['id'];
		$id = $_POST['id'];
        $name = $_POST['name'];
        $advisor = $_POST['advisor'];

        //check if professor is already advising club
        $sql1 = "SELECT * 
                FROM clubs c, professors p
                WHERE p.id = '$p_id'
                    AND p.name = c.advisor
                    AND c.name = '$name'";
		$qry1 = mysqli_query($conn, $sql1);
        $count = mysqli_fetch_array($qry1);
        
        // // to check if class is offered
		// $sql2 = "SELECT * FROM clubs WHERE name='$name' AND advisor IS NOT NULL";
		// $qry2 = mysqli_query($conn, $sql2);
		// $offer = mysqli_fetch_array($qry2);

        if (!empty($id) && !empty($name) && $count == 0) {

            $sql = "UPDATE `clubs`
                    SET advisor='$advisor'
                    WHERE id='$id'";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "You are now advising: " .$name. "<br>";
            }
        }

        else {
            echo "You are already advising " .$name;
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