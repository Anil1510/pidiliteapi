<?php 
	   $host        = "ec2-54-235-77-0.compute-1.amazonaws.com";
	   $port        = "port = 5432";
	   $dbname      = "dbname = d3ok9vkpu1g16s";
	   $credentials = "user = ujqhfvuwxgpzix password=7be2ce4be7a88787ade229a70b90ab50b3f170f0ab6a26b324eb001b32706339";

	   $db = pg_connect( "$host $port $dbname $credentials"  );
	   if(!$db) {
		  echo "Error : Unable to open database\n";
		} else {
		  echo "Opened database successfully\n";
		}
?>