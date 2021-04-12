<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/gunpla.css">
		<title>Mechanic</title>
		<body>
			<table>
				<tr>
					<th>id</th>
					<th>name</th>
					<th>model</th>
					<th>manufacturer</th>
					<th>armor</th>
					<th>height</th>
					<th>weight</th>
				</tr>
			<?php
				$dbc = mysqli_connect('localhost', 
									  'root', 'mysql1234',
									  'gunpladb')
					or die('Error Connect DB');

				mysqli_query($dbc, 'set names utf8');

				$query = 'select * from mechanic';
				$result = mysqli_query($dbc, $query)
					or die('Error Query');

				while ($row = mysqli_fetch_assoc($result)) {
					echo '<tr class="mechanic">';
					echo '<td>' . $row['id'] . '</td>';
					echo '<td>' . $row['name'] . '</td>';
					echo '<td>' . $row['model'] . '</td>';
					echo '<td>' . $row['manufacturer'] . '</td>';
					echo '<td>' . $row['armor'] . '</td>';
					echo '<td>' . $row['height'] . '</td>';
					echo '<td>' . $row['weight'] . '</td>';
					echo '</tr>';
				}

				mysqli_free_result($result);

				mysqli_close($dbc);
			?>			
				
			</table>
		</body>
	</head>
</html>