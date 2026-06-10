<?php
$case = 'NZXT';
$motherboard = 'MSI MEG';
$cpu = 'AMD Ryzen 7';


$dsn = 'mysql:host=localhost;dbname=contract_signing';
$username = 'root';
$password = 'Squid';
try {
	$db = new PDO($dsn, $username, $password);
	$error_message = '<p>It worked!</p>';
	$darkShot = 'SELECT * FROM contract_data';
	$output = $db->prepare($darkShot);
	$output->execute();
	$contract = $output->fetch();
	$output->closeCursor();
}
catch (PDOException $e) {
	$error_message = $e->getMessage();
}


$name = $_GET['name']; //http://localhost/DLC/-001.php?name=Christopher

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>DLC #-001</title>
</head>
<body>
	<h2>DLC Template</h2>
	<div>
		<span class="parts">
			<ul>
				<li>Case: <?php echo $case; ?></li>
				<li>Motherboard: <?php echo $motherboard; ?></li>
				<li>CPU: <?php echo $cpu; ?></li>
				<li>CPU Cooler: </li>
				<li>GPU: </li>
				<li>RAM: </li>
				<li>SSD: </li>
				<li>PSU: </li>
				<li>Monitor: </li>
				<li>OS: </li>
				<li>Labour: </li>
			</ul>
		</span>
		<span class="price">

		</span>
	</div>


	<h1><?php echo $name; ?></h1>
	<h2><?php echo $error_message ?></h2>
	<p><?php echo $contract[2]; ?></p>
</body>
</html>