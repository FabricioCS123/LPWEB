
<?php
$servername = "localhost";
$database = "bd2_uniandrade";
$username = "root";
$password = "";

//criando a conexão
$conn = mysqli_connect($servername,
                       $username,
                       $password,
                       $database);

//Validando a conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "Banco de dados conectado";

//fechando a conexão
mysqli_close($conn);
?>