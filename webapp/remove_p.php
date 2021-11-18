
<?php
	include("connection.php");

	if (isset($_POST['Delete'])) {

		$id = $_POST['id'];
        $name = $_POST['name'];

        if (!empty($number) && !empty($name)) {

            $sql = "DELETE FROM `professors` WHERE id='$id' and name='$name'";
            $qry = mysqli_query($conn, $sql);
        
            if ($qry) {
				$sql1 = "DELETE FROM `login` WHERE id='$number'";
                $qry1 = mysqli_query($conn, $sql1);

                // //check to see if they are advising a club
                // $sql2 = "SELECT * FROM clubs WHERE advisor='$name";
                // $qry2 = mysqli_query($conn, $sql2);
                
				echo "Professor has been removed: " .$name. "<br>";
				echo "Professor's login has been removed: " .$name. "<br>";
            }
            // if ($qry2){
            //     $sql3 = "DELETE FROM `clubs` WHERE advisor='$name'";
            //     $qry3 = mysqli_query($conn, $sql3);
            //     echo "Professor is removed from advising a clubs <br>";
            // }
            // else{
            //     echo "Professor wasn't advising any clubs";
            // }
        }

        else {
            echo "All Fields must be filled";
        }

	}

?>


<!DOCTYPE html>
<html>
	<head>
		<title>Removing a Professor</title>
	</head>
	<body>
		<form action = "" method = "POST">

			<input type = "text" name = "id" placeholder = 'Professor ID'><br><br>
			<input type = "text" name = "name" placeholder = 'Professor Name'><br><br>
			<input type = "submit" name = "Delete" value = "Remove Professor">

		</form>
	</body>
</html>