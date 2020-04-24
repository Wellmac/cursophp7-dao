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
//$usuario = new Usuario();
//$usuario->login("Josefa","maedalange");

//echo $usuario;

/*Criando um novo usuario
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/

/*Alterar um usuario
$usuario = new Usuario();
$usuario->loadbyId(43);
$usuario->update("Teaches", "master@#");
echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->delete();

echo $usuario;

?>