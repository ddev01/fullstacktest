<!DOCTYPE html>
<html>
<head>
    <title>2</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "phpuser";
$password = "root123";
$dbname = 'phpschool';

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
$query = "SELECT * FROM cursist";
$stmt = $conn->prepare($query) or die ("Error 1.");
$stmt->execute() or die ('Error 2.');
$row = $stmt->fetch() or die ('Error 3.');
echo $row['roepnaam']
?>
</body>
</html>