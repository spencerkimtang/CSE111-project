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
			Clubs You Are In
		</h1>
		<table>
			<tr>
			<th>Club ID</th>
			<th>Club Name</th>
			
			<tr>
				<?php
					$id = $_SESSION['id'];
					$sel = "SELECT * FROM `members` WHERE s_id = '$id'";
					$qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
                    $cb_id = $row['cb_id'];
					$clubName = $row['cb_name'];

					echo "<tr><td>" .$cb_id. "</td><td>" .$clubName. "</td><td><a href = 'drop_cb.php?cb_id=$cb_id&clubName=$clubName' >DROP</a></td></tr>";
				}

				?>
			</tr>
		</table>
	</body>
</html>