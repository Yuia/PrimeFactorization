<html>
	<head>
		<meta charset="utf-8">
		<title>素因数分解</title>
		<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
	</head>
	<body>
		<form action="index.php" method="post">
			<input type="text" name="num">
			<input type="submit">
		</form>
		<br>
		<?php
			require("functions.php");
			$road = null;
			if(isset($_POST['num'])){
				$road = (int)$_POST['num'] % 60;
				echo "road ".(int)$road,"<br>";
			}
			switch(true){
				case $road === null:
					break;
				case $road === 7:
					break;
				case $road === 11:
					$answer = load11((int)$_POST['num']);
					echo $answer;
					break;
				default:
					echo "sorry, not support this number.<br>";
					break;
			}
		?>
	</body>
</html>
