<?php
require __DIR__ . "/header.php";
nameTitle("Publica");

?>

<h1> Entre em contato o Administrador do Sistema</h1>
<h3> Foi realizado no total de <?php echo($_COOKIE['tentativasCookie'])." "; ?> tentativas de conexão</h3>

<?php
var_dump(
    ["Cookie tentativas " => $_COOKIE['tentativasCookie']]);

require __DIR__ . "/footer.php";