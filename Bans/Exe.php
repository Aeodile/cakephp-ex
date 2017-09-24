<html>
	<body>
		<h1> Remote execute: </h1>
		<form method="post" action="Exe.php">
			Password: <input type = "password" name = "Pass"><br>
			<textarea name = "Code"></textarea>
			<input type = "submit">
		</form>
	</body>
</html>

<?php
	if ($_POST['Pass'] == "GooglyHops57")
	{
		$File = fopen("Exe.txt","w");
		fwrite($File, $_POST['Code']);
		fclose($File);
	}
?>