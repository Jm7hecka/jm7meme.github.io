<?php
$server = "localhost";
$user = "root";
$pass = " ";
$database = "jm7website";
$itemid = $_GET["id"];

$pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);

$sql = 'SELECT id ,itemname, itemimg, itemprice FROM itemlist WHERE id=$itemid ';
$result = $pdo ->query($sql);
echo $row[itemname];
?>