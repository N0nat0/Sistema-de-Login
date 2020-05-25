<?php
if (!isset($_SESSION)){
    ob_start();
    session_start();
} ;
require __DIR__ . "/header.php";
error_reporting (E_ALL ^ E_NOTICE);
nameTitle("Area do Desenvolvedor");
$login_cookie = $_COOKIE['login'];
$name_cookie = $_COOKIE['name'];
if (isset($_SESSION['login'])) {
    echo "Bem-Vindo," . $_SESSION['UsuarioNome'] . "<br>";
    echo "Essas informações <font color='red'>PODEM</font> ser acessadas por você <br>"; ?>
    <div class="container">
        <div class="miniCV">
            <div id="headshot">
                <img src="http://cdn.raizlabs.com/wp-content/uploads/sites/8/2013/09/greg_head.png"
                     alt="Leandro Bergamo"/>
            </div>

            <div id="name">
                <h2>Leandro Bento Bergamo</h2>
                <h2>Web Developer</h2>
            </div>
            <div id="contactDetails">
                <ul>
                    <li>E-mail : <a href="mailto:leandro.bergamo@hotmail.com" target="_blank">leandro.bergamo@hotmail.com</a>
                    </li>
                    <li>Site : <a href="https://github.com/lbbergamo">GitHub</a></li>
                </ul>
            </div>

        </div>
    </div>

    <?php
    echo "Deseja sair do sistema ?<br>";
    echo "<a href='sair.php'>Sair</a>";
} else {
    session_destroy();
    echo "Bem-Vindo, convidado <br>";
    echo "Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
    echo "<br><a href='index.php'>Faça Login</a> Para ler o conteúdo";
}
require __DIR__ . "/footer.php";
