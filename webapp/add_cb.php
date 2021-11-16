<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$id = $_POST['id'];
        $name = $_POST['name'];
        $advisor = $_POST['advisor'];
        $president = $_POST['president'];

        $sql2 = "SELECT * FROM clubs WHERE id='$id'";
		$qry2 = mysqli_query($conn, $sql2);
		$count = mysqli_fetch_array($qry2);

        if ((!empty($id) && !empty($name) && !empty($advisor) && !empty($president) && $count==0)) {

            $sql = "INSERT INTO `clubs`(`id`, `name`, `advisor`, 'president') 
                    VALUES ('$id', '$name', '$advisor', '$president')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "New Club has been added: " .$name. "<br>";
            }
        }

        else {
            echo "Club ID already exists" .$id;
        }

	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Adding a New Club</title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "id" placeholder = 'Club ID'><br><br>
			<input type = "text" name = "name" placeholder = 'Club Name'><br><br>
            <input type = "text" name = "advisor" placeholder = 'Club Advisor'><br><br>
            <input type = "text" name = "president" placeholder = 'Club President'><br><br>
			<input type = "submit" name = "Add" value = "Add New Club">

		</form>
	</body>
</html>