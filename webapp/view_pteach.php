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
			Students You Teach
		</h1>
		<form action = "search_ps.php" method = "POST">
			<input type = "text" placeholder = "Search Student" name="search">
			<input type = "submit" value="Search" name="submit">
		</form>
		<table>
			<tr>
			<th>Student ID</th>
			<th>Student Name</th>
            <th>Class Number</th>
            <th>Grade</th>
			
			<tr>
				<?php
					$id = $_SESSION['id'];
					$sel = "SELECT s.id, s.name, c.number, t.grade
                            FROM courses c, professors p, takes t, students s
                            WHERE p.id='$id' 
                                AND p.name = c.p_name
                                AND c.number = t.c_number
                                AND t.s_id = s.id";
                    
                    $qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
                    $id = $row['id'];
					$number = $row['number'];
                    $name = $row['name'];
                    $grade = $row['grade'];

					echo "<tr><td>" .$id. "</td><td>" .$name. "</td><td>" .$number. "</td><td>" .$grade."</td><td></td></tr>";
				}

				?>
			</tr>
		</table>
	</body>
</html>