<?php

echo ("<pre>");
var_dump($_POST);
echo ("</pre>");

// Creating conection of Database using PDO
$servername = "141.136.39.43";
$username = "digit634_Training";
$password = "Training@1";
$dbname = "digit634_Training";

// Create connection
$pdo = new PDO('mysql:host=141.136.39.43;dbname=digit634_Training', $username, $password);

// ********  Insert data *********************//
// data example to insert of two columns BankName, BankAddress
$BankName = $_POST['bank_name'];
$BankAddress = $_POST['bank_address'];

$sql = "INSERT INTO Bank (BankName, BankAddress) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$BankName, $BankAddress]);

header('Location: index.php');