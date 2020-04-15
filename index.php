<?php


require_once("config.php");

$root = new Usuario();

$root->loadbyId(11);

echo $root;

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario >= 7");

echo json_encode($usuarios);
*/
?>