<?php
	function hex2str( $hex ) {
	  return pack('H*', $hex);
	}

	function str2hex( $str ) {
	  return array_shift( unpack('H*', $str) );
	}

	$Hex = $_POST['HEX'];
	echo str2hex($Hex);
?>