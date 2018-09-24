<?php

$dsn = 'mysql:host=localhost;dbname=sampledatabase';
$username = 'admin';
$password = 'admin123';


$con = new PDO($dsn, $username, $password);
$data = json_decode(file_get_contents("php://input",true));

$query = $con->prepare("INSERT INTO sample_list(firstName,lastName) VALUES(?,?)");

$query->bindParam(1,$data->firstName,PDO::PARAM_STR);
$query->bindParam(2,$data->lastName,PDO::PARAM_STR);
$query->execute();
?>