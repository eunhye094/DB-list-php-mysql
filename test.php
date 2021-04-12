<!Doctype html>
<html>
	<head>
		<title>PHP 예제</title>
		<meta charset="utf-8"/>
		<body>
			<?php
				$dbc = mysqli_connect('localhost', 
								  'root', 'eunhye',
								  'gunpladb')
				or die('Error Connect DB');
			echo '성공';
			?>
		</body>
	</head>
</html>