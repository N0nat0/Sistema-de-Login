<?php

$server = "localhost";
$pass = ""; /* Senha */
$con = mysqli_connect($server, $user, $pass);

$login = $_POST['_login'];
$entrar = $_POST['entrar'];
$pass = $_POST['_pass'];
$senha = md5($pass);
$connect = $con;

if(isset($_COOKIE)){
    $tentativa = $_COOKIE['tentativasCookie'];
    if($tentativa >3){
        echo "<script language='javascript' type='text/javascript'>
        alert('Já realizou mais de 3 tentativas - Entre em contato com o desenvolvedor' );
        window.location.href='publica.php';</script>";
        die();
    }
}
else{
}


$db = mysqli_select_db($con,$bd);
if (isset($entrar)) {

    $verifica = mysqli_query($con,"SELECT * FROM tb_cliente WHERE login_cliente = 
    '$login' AND senha_cliente = '$senha'
    ") or die("Erro ao selecionar");
    if (mysqli_num_rows($verifica) <= 0) {
        $tentativa += 1;
        setcookie('tentativasCookie',$tentativa ,time()+3600 );

        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');
        window.location.href='index.php';</script>";

        die();
    } else {
        setcookie("tentativasCookie",null,-1);

        $row = mysqli_fetch_assoc($verifica);
        if(!isset($_SESSION)){
            session_start();
        }
            $_SESSION["name"] = $row['nm_cliente'];
            $_SESSION["login"] = $row['login_cliente'];
       header("Location:desenvolvedores.php");
    }
}