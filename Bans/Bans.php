<?php
	$Name = $_POST['NAME'];
	$UserID = $_POST['UID'];
	$Reason = $_POST['REASON'];
	$StartTime = $_POST['STARTTIME'];
	$Time = $_POST['TIME'];
	$Data = $_POST['DATA'];
	$Pass = $_POST['MOUSE'];
	if (!empty($Data) AND $Pass == "FurryMouse57")
	{
		$File = fopen("Bans.txt","w");
		fwrite($File, $Data);
		fclose($File);
	}
	elseif (!empty($Name) AND !empty($UserID) AND !empty($Reason) AND !empty($StartTime))
	{
		if (empty($Time))
		{
			$Time = "600";
		}
		$File = fopen("Bans.txt","a");
		fwrite($File, '[' . $Name . '|' . $UserID . '|' . $Reason . '|' . $Time . '|' . $StartTime . ']');
		fclose($File);
	}
?>