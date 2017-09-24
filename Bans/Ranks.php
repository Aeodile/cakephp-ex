<?php
	$Name = $_POST['NAME'];
	$UserID = $_POST['UID'];
	$Rank = $_POST['RANK'];
	$Color = $_POST['COLOR'];
	$Data = $_POST['DATA'];
	$Pass = $_POST['MOUSE'];
	if (!empty($Data) AND $Pass == "FurryMouse57")
	{
		$File = fopen("Ranks.txt","w");
		fwrite($File, $Data);
		fclose($File);
	}
	elseif (!empty($Name) AND !empty($UserID) AND !empty($Rank) AND !empty($Color))
	{
		$File = fopen("Ranks.txt","a");
		fwrite($File, '[' . $Name . ',' . $UserID . ',' . $Rank . ',' . $Color . ']');
		fclose($File);
	}
?>