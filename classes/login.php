<?php
/**
 * Created by PhpStorm.
 * User: martin
 * Date: 10/11/17
 * Time: 23:42
 */
session_start();
require 'pdo.php';


$_POST["usuario"] = 'eagle9411@gmail.com';
$_POST["password"] = 'vistaalmar';

if(!isset($_POST["usuario"]) or !isset($_POST["password"])){
    header("HTTP/1.1 401 Unauthorized");
    echo "Ingrese usuario y contraseña";
    return;
}

$usuario = $_POST["usuario"];
$password = $_POST["password"];

$usuarios = $conn->query("select * from usuario where correo = '$usuario' and password = md5('$password') limit 1");

if($usuarios->rowCount() == 0){
    header("HTTP/1.1 401 Unauthorized");
    echo "Usuario y contraseña erronea";
    return;
}

foreach ($usuarios as $U){
    $_SESSION["user"] = $U["correo"];
    $_SESSION["id_user"] = $U["id_usuario"];
    echo "Ok";
    return;
}
