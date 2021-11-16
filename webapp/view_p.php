<?php

include("connection.php");

?>

<!DOCTYPE html>
<html><style type = "text/css">
			table {
			font-family:Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
			}

			td {
				border:1px solid #ddd;
				padding:5px;
			}

			tr:nth-child(even){background-color: #f2f2f2;}


			th {
				border:1px solid #ddd;
				padding:5px;
				padding-top: 5px;
				padding-bottom: 5px;
				text-align: left;
				background-color: #04AA6D;
				color: white;
			}

			.fixHeader table th {
		   		position: sticky;
		      	top: 0;
		    }

		</style>
	</head>
	<body>
		<h1>
			Professors at UCM
		</h1>
		<form action = "search_p.php" method = "POST">
			<input type = "text" placeholder = "Professor Name or ID" name="search">
			<input type = "submit" value="Search" name="submit">
		</form>
		<form action = "search_teach.php" method = "POST">
			<input type = "text" placeholder = "Professor Teachs" name="search">
			<input type = "submit" value="Search" name="submit">
		</form>
		<form action = "add_p.php" method = "get">
			<input type = "submit" value = "Add New Professor">
		</form>
		<table>
			<tr>
			<th>Professor's ID</th>
			<th>Professor's Name</th>
            <th>Professor's Email</th>
			
			<tr>
				<?php
					$sel = "SELECT * FROM `professors`";
					$qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
					$id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];

					echo "<tr><td>" .$id. "</td><td>" .$name. "</td><td>"  .$email. "</td><td></td></tr>";
				}

				?>
			</tr>
		</table>
	</body>
</html>