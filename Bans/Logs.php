<?php
	$Name = $_POST['NAME'];
	$Command = $_POST['COMMAND'];
	$ID = $_POST['ID'];
	date_default_timezone_set("Asia/Kuala_Lumpur");
	$Minutes = time()/60%60;
	$Seconds = time()%60;
	$Hours = ((time()/3600)%24) + 8;
	if ($ID == 21053279)
	{
		$ID = "Anti's Script Builder";
	}
	elseif ($ID == 317592120)
	{
		$ID = "Naruto Game";
	}
	else 
	{
		$ID = "Unknown Game";
	}
	if ($Hours >= 13) 
	{
		$Hours = $Hours - 12;
		$Stamp = "PM";
	}
	elseif ($Hours >= 12) 
	{
		$Stamp = "PM";
	}
	if ($Minutes < 10) 
	{
		$Minutes = "0" . $Minutes;
	}
	if ($Seconds < 10) 
	{
		$Seconds = "0" . $Seconds;
	}
	$Time = $Hours . ":" . $Minutes . ":" . $Seconds;
	if (!empty($Command) AND !empty($Name))
	{
		if ($Name !== "Aeodile")
		{
			$File = fopen("Logs.txt","a");
			fwrite($File, $Name . ' used ' . $Command . ' [' . $Time . ' ' . date('Y-m-d') . '] ' . $ID . PHP_EOL);
			fclose($File);
		}
	}
?>