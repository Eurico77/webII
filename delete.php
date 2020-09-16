<?php

$id = $_GET['id'];

$con = new PDO("mysql:host=localhost;dbname=test", "root", "");

$con->exec("DELETE FROM book WHERE id = $id");
header('Location: relatorio.php');
