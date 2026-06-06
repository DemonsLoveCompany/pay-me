<?php
$case = 'NZXT';
$motherboard = 'MSI MEG';
$cpu = 'AMD Ryzen 7';

$dsn = 'mysql:host=localhost;dbname=contract_signing';
$username = 'root';
$password = 'Squid';

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
</body>
</html>