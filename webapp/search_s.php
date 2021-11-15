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
			Search Student
		</h1>
		<table>
			<tr>
			<th>Student's ID</th>
			<th>Student's Name</th>
            <th>Student's Email</th>
			
			<tr>
				<?php
                	
                        $search= $_POST['search'];

                        $sql = "SELECT * FROM  `students` WHERE name LIKE '%$search%' OR id = '$search'";
                        $query = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($query)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $email = $row['email'];
        
                            echo "<tr><td>" .$id. "</td><td>" .$name. "</td><td>"  .$email. "</td><td></td></tr>";
                        }
                   
				?>
			</tr>
		</table>
	</body>
</html>