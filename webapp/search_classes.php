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
			Search Classes
		</h1>
		<table>
			<tr>
			<th>Class Number</th>
			<th>Name</th>
            <th>Professor</th>
			
			<tr>
				<?php
                	
                        $search= $_POST['search'];

                        $sql = "SELECT * FROM  `courses` WHERE number LIKE '%$search%'";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)){
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