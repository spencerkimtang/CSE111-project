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
			Professor Teaches These Courses
		</h1>
		<table>
			<tr>
			<th>Course Number</th>
			<th>Course Name</th>
            <th>Professor Name</th>
			
			<tr>
				<?php
                	
                        $search= $_POST['search'];

                        $sql = "SELECT * FROM  `courses` WHERE p_name LIKE '%$search%'";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)){
                            $number = $row['number'];
                            $name = $row['name'];
                            $p_name = $row['p_name'];
        
                            echo "<tr><td>" .$number. "</td><td>" .$name. "</td><td>"  .$p_name. "</td><td></td></tr>";
                        }
                   
				?>
			</tr>
		</table>
	</body>
</html>