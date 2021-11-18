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
			Clubs at UCM
		</h1>
		<form action = "search_club.php" method = "POST">
			<input type = "text" placeholder = "Search Clubs Name or ID" name="search">
			<input type = "submit" value="Search" name="submit">
		</form>
		<form action = "join_cb.php" method = "get">
			<input type = "submit" value = "Join Clubs">
		</form>
		<table>
			<tr>
			<th>Club ID</th>
			<th>Club Name</th>
            <th>Advisor</th>
			<th>President</th>
			
			<tr>
				<?php
					$sel = "SELECT * FROM `clubs`";
					$qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
                    $cb_id = $row['id'];
					$cb_name = $row['name'];
                    $advisor = $row['advisor'];
                    $president = $row['president'];
					echo "<tr><td>" .$cb_id. "</td><td>" .$cb_name. "</td><td>" .$advisor. "</td><td>" .$president. "</td><td></td></tr>";
				}

				?>
			</tr>
		</table>
	</body>
</html>