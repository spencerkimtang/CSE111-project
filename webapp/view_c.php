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
			Schedule
		</h1>
		<table>
			<tr>
			<th>Class Name</th>
			<th>Grade</th>
			
			<tr>
				<?php
					$id = $_SESSION['id'];
					$sel = "SELECT * FROM `takes` WHERE s_id = '$id'";
					$qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
                    $s_id = $row['s_id'];
					$className = $row['c_number'];
					$grade = $row['grade'];

					echo "<tr><td>" .$className. "</td><td>" .$grade. "</td><td><a href = 'drop_c.php?c_number=$className' >DROP</a></td></tr>";
				}

				?>
			</tr>
		</table>
	</body>
</html>