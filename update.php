<?php

// PHP Variables for the PDO Object ~ to connect to a database
$dsn = 'mysql:host=localhost;dbname=contract_signing';
$username = 'root';
$password = 'Squid';

// PDO Object Setup
$db = new PDO($dsn, $username, $password);

// PHP Variables
$update_id = 2;
$name = 'DemonBoy';
$date = 'RockStar Pyro Concept stalling days';
$witness = 'DeadMan1';


$query = 'UPDATE contract_data
			SET name = :name, 
				 sign_date = :date,
				 witness = :witness 
			WHERE contract_ID = :update_id';

$statement = $db->prepare($query);
$statement->bindValue(':update_id', $update_id);
$statement->bindValue(':name', $name);
$statement->bindValue(':date', $date);
$statement->bindValue(':witness', $witness);

$statement->execute();
$statement->closeCursor();



?>