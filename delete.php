<?php
$host = 'localhost';
$username = 'vechtstreekfruit';
$password = 'zxy5qhr6JWP3cjc!jaf';
$dbname = 'vechtstreekfruit';

try {
  $conn = new PDO("mysql:host=localhost;port=3306;dbname=vechtstreekfruit", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$id = $_GET['id'];
$sql = 'DELETE FROM bomen WHERE id=:id';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: admin.php");
}
