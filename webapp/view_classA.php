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
			Classes at UCM
		</h1>
		<form action = "search_classes.php" method = "POST">
			<input type = "text" placeholder = "Search Classes" name="search">
			<input type = "submit" value="Search" name="submit">
		</form>
		<form action = "add_c.php" method = "get">
			<input type = "submit" value = "Add Course">
		</form>
		<table>
			<tr>
			<th>Class Number</th>
			<th>Name</th>
            <th>Professor</th>
			
			<tr>
				<?php
					$sel = "SELECT * FROM `courses`";
					$qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
						$c_number = $row['number'];
						$name = $row['name'];
						$pName = $row['p_name'];

						echo "<tr><td>" .$c_number. "</td><td>" .$name. "</td><td>"  .$pName. "</td><td></td></tr>";
				}

				?>
			</tr>
		</table>
	</body>
</html>