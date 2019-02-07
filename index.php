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
			$time_start = microtime(true);
			if(isset($_POST['num'])){
				$road = (int)$_POST['num'] % 60;
				echo "road ".(int)$road,"<br>";
			}
			switch(true){
				case $road === null:
					break;
				case $road === 7:
					$answer = load7((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 11:
					$answer = load11((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 13:
					$answer = load13((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 17:
					$answer = load17((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 19:
					$answer = load19((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 23:
					$answer = load23((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 29:
					$answer = load29((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 31:
					$answer = load31((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 37:
					$answer = load37((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 41:
					$answer = load41((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 43:
					$answer = load43((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 49:
					$answer = load49((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 53:
					$answer = load53((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 59:
					$answer = load59((int)$_POST['num']);
					echo $answer;
					break;
				case $road === 1:
					$answer = load61((int)$_POST['num']);
					echo $answer;
					break;
				default:
					echo "sorry, not support this number.<br>";
					break;
			}
			$time = microtime(true) - $time_start;
			echo "<br>".$time."<br>";
		?>
	</body>
</html>
