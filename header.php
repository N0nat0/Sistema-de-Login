<?php
error_reporting (E_ALL ^ E_NOTICE);
header("Content-Type: text/html; ");
date_default_timezone_set("America/Sao_Paulo");
echo "<link rel='stylesheet' href='style/style.css'/>",
"<img class='logoUnisanta' src='https://www.unisanta.br/images/logos/logo-vertical-branco.png'/>";;

function nameTitle($nameTitle)
{
    echo "<title>{$nameTitle} | Sistema de Login Unisanta</title>";
}

