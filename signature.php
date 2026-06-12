<?php

// PHP Variables for the PDO Object ~ to connect to a database
$dsn = 'mysql:host=localhost;dbname=contract_signing';
$username = 'root';
$password = 'Squid';

// PDO Object Setup
$db = new PDO($dsn, $username, $password);

// PHP $_POST Array Data
$name = $_POST['name'];
$date = $_POST['sign_date'];
$witness = $_POST['witness'];

$query = 'INSERT INTO contract_data
				(name, sign_date, witness)
			 VALUES
			 	(:name, :date, :witness)';

$statement = $db->prepare($query);
$statement->bindValue(':name', $name);
$statement->bindValue(':date', $date);
$statement->bindValue(':witness', $witness);

$statement->execute();
$statement->closeCursor();

?>