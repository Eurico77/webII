<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$descricao = $_POST['descricao'];

$con = new PDO("mysql:host=localhost;dbname=test", "root", "");

$con->exec("INSERT INTO book(titulo, autor, descricao) VALUES('$titulo', '$autor', '$descricao')");
header('Location: relatorio.php');
