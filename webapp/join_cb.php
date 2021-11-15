<?php
	include("connection.php");

	if (isset($_POST['Add'])) {

		$s_id = $_POST['s_id'];
        $cb_id = $_POST['cb_id'];
        $cb_name = $_POST['cb_name'];
		$s_name = $_POST['s_name'];

        if (!empty($s_id) && !empty($cb_id) && !empty($cb_name) && !empty($s_name)) {

            $sql = "INSERT INTO `members`(`s_id`, `cb_id`, `cb_name`, `s_name`) 
                    VALUES ('$s_id','$cb_id','$cb_name','$s_name')";

            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
                echo "You have successfully joined "  .$cb_name. "<br>";
            }
        }

        else {
            echo "All fields must be filled";
        }

	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "s_id" placeholder = 'Student ID'><br><br>
			<input type = "text" name = "cb_id" placeholder = 'Club ID'><br><br>
            <input type = "text" name = "cb_name" placeholder = 'Club Name'><br><br>
			<input type = "text" name = "s_name" placeholder = 'Student Name'><br><br>
			<input type = "submit" name = "Add" value = "Join Club!">

		</form>
	</body>
</html>