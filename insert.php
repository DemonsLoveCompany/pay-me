<?php

// PHP Variables for the PDO Object ~ to connect to a database
$dsn = 'mysql:host=localhost;dbname=contract_signing';
$username = 'root';
$password = 'Squid';

// PDO Object Setup
$db = new PDO($dsn, $username, $password);


?>