<!DOCTYPE html>
<html lang="en-us">
<head>
    <title>Fullstack</title>
</head>

<body>
<nav>
    <a href="/index.html/">Home</a> |
    <a href="/bestemmingen.html/">Bestemmingen</a> |
    <a href="/reizen.html/">Reizen</a> |
    <a href="/registreer.html/">Registreer</a> |
    <a href="/inloggen.html/">Inloggen</a>
</nav>
<img src='img/stock.png' width="400" height="400">
<img src='img/stock.png' width="400" height="400">
<img src='img/stock.png' width="400" height="400">

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
?>
<footer>
<p>Copyright Dehortop 2019</p>
</footer>
</body>
</html>