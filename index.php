<html>
	<head>
		<meta charset="utf-8">
		<title>素因数分解</title>
	</head>
	<body>
		<form action="index.php" method="post">
			<input type="text" name="num">
			<input type="submit">
		</form>
		<br>
		<?php
			if(isset($_POST['num'])){
				$n = (int)$_POST['num'] % 60;
				echo "road ".(int)$n;
			}
		?>
	</body>
</html>