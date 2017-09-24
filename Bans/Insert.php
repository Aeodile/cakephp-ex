<html>
	<body>
		<h1> Add ban: </h1>
		<form action = "Insert.php" method = "post">
			Name: <input type = "text" name = "Name"><br>
			Reason: <input type = "text" name = "Reason"><br>
			Time: <input type = "text" name = "Time"><br>
			Password: <input type = "password" name = "Pass"><br>
			<input type = "submit">
		</form>
		<h1> Add rank: </h1>
		<form action = "Insert.php" method = "post">
			Name: <input type = "text" name = "Name2"><br>
			Rank: <input type = "text" name = "Rank"><br>
			Color: <input type = "text" name = "Color"><br>
			Password: <input type = "password" name = "Pass2"><br>
			<input type = "submit">
		</form>
	</body>
</html>

<?php
	$Name = $_POST['Name'];
	$Reason = $_POST['Reason'];
	$Time = $_POST['Time'];
	$Name2 = $_POST['Name2'];
	$Rank = $_POST['Rank'];
	$Color = $_POST['Color'];
	$Pass = $_POST['Pass'];
	$Pass2 = $_POST['Pass2'];
	if (isset($Reason) AND isset($Name) AND isset($Time) AND $Pass == "SlimySlop910")
	{
		$File = fopen("Bans.txt","a");
		fwrite($File, '[' . $Name . ',,' . $Reason . ',' . $Time . ',' . time() . ']');
		fclose($File);
	}
	elseif (isset($Rank) AND isset($Name2) AND isset($Color) AND $Pass2 == "GooglyHops57") 
	{
		$File = fopen("Ranks.txt","a");
		fwrite($File, '[' . $Name2 . ',,' . $Rank . ',' . $Color . ']');
		fclose($File);
	}
	else
	{
		echo "Failed!";
	}
?>