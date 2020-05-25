<?php
//include __DIR__ . "/conectarBD.php";


$server = "localhost";
$bd = ""; /*BANCO DE DADOS*/
$user = ""; /*Usuario*/
$pass = ""; /* Senha */
$con = mysqli_connect($server, $user, $pass);

$login = $_POST['_login'];
$entrar = $_POST['entrar'];
$senha = $_POST['_pass'];
$connect = $con;

$db = mysqli_select_db($con,$bd);
if (isset($entrar)) {

    $verifica = mysqli_query($con,"SELECT * FROM tb_cliente WHERE login_cliente = 
    '$login' AND senha_cliente = '$senha'
    ") or die("Erro ao selecionar");
    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');
        window.location.href='index.php';</script>";
        die();
    } else {
        $row = mysqli_fetch_assoc($verifica);
        if(!isset($_SESSION)){
            session_start();
        }
            $_SESSION["name"] = $row['nm_cliente'];
            $_SESSION["login"] = $row['login_cliente'];

//        setcookie("login", $login);
//        setcookie("name",$nameCliente);

       header("Location:desenvolvedores.php");
    }
}