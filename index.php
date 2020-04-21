<?php


require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(11);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("fil");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha ref a aula64-PDO-DAO-LIST concluida ok udemy php7 completo
$usuario = new Usuario();
$usuario->login("Josefa","maedalange");

echo $usuario;

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario >= 7");

echo json_encode($usuarios);
*/
?>