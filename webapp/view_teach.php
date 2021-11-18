<?php
session_start();
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
			Classes You Teach
		</h1>
		<form action = "search_pc.php" method = "POST">
			<input type = "text" placeholder = "Search Classes" name="search">
			<input type = "submit" value="Search" name="submit">
		</form>
        <form action = "view_pteach.php" method = "get">
            <input type = "submit" value = "Students You Teach">
        </form>
		<table>
			<tr>
			<th>Class Number</th>
			<th>Class Name</th>
			
			<tr>
				<?php
					$id = $_SESSION['id'];
					$sel = "SELECT c.number, c.name FROM courses c, professors p WHERE p.id='$id' AND p.name = p_name";
					$qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
					$number = $row['number'];
                    $name = $row['name'];

					echo "<tr><td>" .$number. "</td><td>" .$name. "</td><td></td></tr>";
				}

				?>
			</tr>
		</table>
	</body>
</html>