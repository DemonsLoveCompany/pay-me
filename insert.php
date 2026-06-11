<?php

// PHP Variables for the PDO Object ~ to connect to a database
$dsn = 'mysql:host=localhost;dbname=contract_signing';
$username = 'root';
$password = 'Squid';

// PDO Object Setup
$db = new PDO($dsn, $username, $password);

// PHP Variables
$insert_id = 2;
$name = 'SquidBoy';
$date = 'Go-Kart Glory Days';
$witness = 'The Demon';


$query = 'INSERT INTO contract_data
				(contract_ID, name, sign_date, witness)
			 VALUES
			 	(:insert_id, :name, :date, :witness)';

$statement = $db->prepare($query);
$statement->bindValue(':insert_id', $insert_id);
$statement->bindValue(':name', $name);
$statement->bindValue('date', $date);
$statement->bindValue('witness', $witness);

$statement->execute();
$statement->closeCursor();



?>