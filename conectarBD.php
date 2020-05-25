<?php

$error = "Erro de conexão. Favor conferir os dados";
$server = "localhost";
$bd = ""; /*BANCO DE DADOS*/
$user = ""; /*Usuario*/
$pass = ""; /* Senha */
$con = mysqli_connect($server, $user, $pass , $bd);

if (!$con) {
    echo "Não foi possivel estabelecer uma conexão com o MySQL";
    echo $error;
    echo "Erro na conexão: "
        . mysqli_connect_error();
} else {
  echo "Conexão com o BD ($bd) realizada com sucesso!!";
}