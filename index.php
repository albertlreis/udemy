<?php

require_once ("config.php");

//Carregar um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Lista de Usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega lista de usuários buscando pelo login
//$busca = Usuario::search("r");
//echo json_encode($busca);

//Carega um usuário usando login e senha
//$usuario = new Usuario();
//$usuario->login("albert", "123456");
//echo $usuario;

//Inserir novo usuário

$aluno = new Usuario("aluno","123456");

$aluno->insert();

echo $aluno;

?>