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
			Search Student You Advise
		</h1>
		<table>
			<tr>
			<th>Student's ID</th>
			<th>Student's Name</th>
            <th>Student's Email</th>
			
			<tr>
				<?php
                	
                    $search= $_POST['search'];
                    $id = $_SESSION['id'];
                    $sel = "SELECT s.id, s.name, s.email 
                            FROM students s, advisor a, studies st, department d
                            WHERE a.d_code = d.id
                                AND s.id = st.s_id
                                AND a.id = '$id'
                                AND st.major = d.name
                                AND (s.id LIKE '%$search%'
                                OR s.name LIKE '%$search%')";
					$qryDisplay = mysqli_query($conn, $sel);
					while ($row = mysqli_fetch_array($qryDisplay)) {
                    
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