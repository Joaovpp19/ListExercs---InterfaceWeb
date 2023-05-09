<?php

function verificacaodados($name, $password, $verificacaodados) {
    foreach ($verificacaodados as $usuario) {

    if($usuario['name'] === $name && $usuario['password'] === $password) {
    return true;
   }}
    return false;
 }

 $verificacaodados = array(
    array('name' => 'João Vitor', 'password' => 'Jonvs07'),);


$username = $_POST['name'];
$password = $_POST['password'];

if (verificacaodados($username, $password, $verificacaodados)) {
    header('Location: destino.php');
    exit;
} 
else {
    echo '<h1>Seu acesso foi negado!</h1>';
    echo '<h2>Nome de usuario e/ou senha estão incorretos';}
?><br><br><form method="POST" action="index.php">
<input type="submit" name="Tente novamente" value="Tente novamente">
