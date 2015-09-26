<?php
	$port = 5432;
	$hostname = 'paylessphx.hyperionclients.com';

	$result = exec ( "nmap -p $port $hostname -PNoG --reason | grep $port" );

	if ( strpos ( $result, 'closed' ) !== false ) {
		echo "$port is closed \n";
	} elseif ( strpos ( $result, 'open' ) !== false ) {
		echo "$port is open \n";
	} elseif ( strpos ( $result, 'filtered' ) !== false ) {
		echo "$port is filtered \n";
	}

?>
