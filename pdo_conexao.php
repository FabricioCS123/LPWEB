<?php
$servername = "localhost";
$database = "bd2_uniandrade";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    echo "Conectado a $database em $servername com sucesso usando PDO.";
} catch (PDOException $pe){
    $mensagem = "Drivers disponíveis: " . implode(", ", PDO::getAvailableDrivers());
    $mensagem .= "\nErro: " . $pe->getMessage();
    throw new Exception($mensagem);
}