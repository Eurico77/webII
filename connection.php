<?php
// $dsn = 'mysql:host=localhost;dbname=test';
// $username = 'root';
// $password = '';

// try {
//     $connection = new PDO($dsn, $username, $password);
// } catch (PDOException $e) {
//     echo $e;
// }

// $username = $_POST['username'];
// $password = $_POST['password'];
//$_POST['username'] = "sdsds";

$con = new PDO("mysql:host=localhost;dbname=test_php", "root", "");

//$con->exec("INSERT INTO tb_usuarios(username, password) VALUES('3233', '32434')");

$resultados = $con->query("SELECT * FROM tb_usuarios");


echo "<table>";
foreach($resultados as $resultado) {
    echo "<tr>";
        echo "<td>".$resultado['username']."</td>";
        echo "<td>".$resultado['password']."</td>";
        
        //echo "<td> <a href='delete.php?id=" .$resultado['id']. "'> Deletar </a></td>";
        echo "<td> <a href=''> Editar </a></td>";
    echo "</tr>";
}

echo "</table>";


var_dump($_REQUEST);