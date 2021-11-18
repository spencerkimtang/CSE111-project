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
			Students You Advise that are in a Club
		</h1>
		<form action = "search_As.php" method = "POST">
			<input type = "text" placeholder = "Search Student by ID or name" name="search">
			<input type = "submit" value="Search" name="submit">
		</form>
		<table>
			<tr>
			<th>Student's ID</th>
			<th>Club's ID</th>
            <th>Club Name</th>
            <th>Student Name</th>
			
			<tr>
				<?php
                    $id = $_SESSION['id'];
                    $sel = "SELECT m.s_id, m.cb_id, m.cb_name, m.s_name 
                            FROM students s, advisor a, studies st, department d, members m
                            WHERE a.d_code = d.id
                                AND s.id = st.s_id
                                AND a.id = '$id'
                                AND st.major = d.name
                                AND s.id = m.s_id";
					$qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
					$s_id = $row['s_id'];
                    $cb_id = $row['cb_id'];
                    $cb_name = $row['cb_name'];
                    $s_name = $row['s_name'];

					echo "<tr><td>" .$s_id. "</td><td>" .$cb_id. "</td><td>" .$cb_name."</td><td>"  .$s_name. "</td><td></td></tr>";
				}

				?>
			</tr>
		</table>
	</body>
</html>