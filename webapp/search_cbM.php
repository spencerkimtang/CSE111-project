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
			Search Clubs Members
		</h1>
		<table>
			<tr>
			<th>Student ID</th>
			<th>Club ID</th>
            <th>Club Name</th>
			<th>Student Name</th>
			
			<tr>
				<?php
                	
                        $search= $_POST['search'];

                        $sql = "SELECT * FROM  `members` WHERE cb_name LIKE '%$search%' OR s_name = '&$search%'";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)){
                            $s_id = $row['s_id'];
                            $cb_id = $row['cb_id'];
                            $cb_name = $row['cb_name'];
                            $s_name = $row['s_name'];

                            echo "<tr><td>" .$s_id. "</td><td>" .$cb_id. "</td><td>" .$cb_name. "</td><td>" .$s_name. "</td><td><a href = 'drop_cb.php?cb_id=$cb_id&sID=$s_id' >DROP</a></td></tr>";
                        }
                   
				?>
			</tr>
		</table>
	</body>
</html>