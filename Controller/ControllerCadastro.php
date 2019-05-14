<?php 
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");
$crud=new ClassCrud();
$crud->insertDB(
    "usuario",
    "?,?,?,?,?",
    array(
        $id,
        $nome,
        $senha,
        $nickname,
        $idpermissao
    )
);
    echo "Cadastro realizado com sucesso";

