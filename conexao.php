<?php
$servidor = "localhost";
$banco = "ads";
$usuariobd = "root";
$senhabd = "";

$conect = new mysqli($servidor, $usuariobd, $senhabd, $banco);
if ($conect->connect_error) {
    die("Falha ao conectar: ".$conect->connect_error);
}
