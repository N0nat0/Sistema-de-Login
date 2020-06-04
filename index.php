<?php
require __DIR__ . "/header.php";
nameTitle("Login");

?>
    <h1> Sistema de Login </h1>
    <form action="autenticarCliente.php" method="post"><label
                for="login">Login:</label> <input type="text" name="_login" id="login" required>   <label
                for="pass">Senha:</label> <input type="password" name="_pass" id="pass " required></input>
      <button type="submit" value="entrar" name="entrar"><b>Login</b></button>
        <button type="reset" value="btn-Limpar"><b>Limpar</b></button>
    </form>

<?php
var_dump(
        ["Cookie tentativas " => $_COOKIE['tentativasCookie']]);

require __DIR__ . "/footer.php";