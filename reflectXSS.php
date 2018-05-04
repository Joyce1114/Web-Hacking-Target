<html>
	<head>
	</head>
	
	<body>
		<form action="reflectXSS.php" method="get">
			name: <input type="text" name="name" />
			<input type="submit" value="submit" />
		</form>
		<br />
		I am your <b>father</b>, 
		<?php
			$name = $_GET["name"];
			echo htmlspecialchars(strtoupper($name));
		?>
		<br />
		<br />
		<ol>
			<li> Join the dark side.</li>
			<li> Die horrible death.</li>
		</ol>
	</body>
</html>
