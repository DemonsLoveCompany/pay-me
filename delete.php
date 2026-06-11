<?php
// This file is for learning purposes and deletes a row with an ID value of 2

// PHP Variables for the PDO Object ~ to connect to a database
$dsn = 'mysql:host=localhost;dbname=contract_signing';
$username = 'root';
$password = 'Squid';

// PDO Object Setup
$db = new PDO($dsn, $username, $password);

// PHP Variables
$delete_id = 2;
$query = 'DELETE FROM contract_data 
			 WHERE contract_ID = :delete_id';

$statement = $db->prepare($query);
$statement->bindValue(':delete_id', $delete_id);
$statement->execute();
$statement->closeCursor();

?>