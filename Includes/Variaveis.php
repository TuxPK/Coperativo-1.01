<?php
$idpermissao = 4;
if(isset($_POST['nickname'])){
    $nickname=filter_input(INPUT_POST, 'nickname',  FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['nickname'])){
    $nickname=filter_input(INPUT_GET, 'nickname',  FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $nickname="";
}
if(isset($_POST['nome'])){
    $nome=filter_input(INPUT_POST, 'nome',  FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['nome'])){
    $nome=filter_input(INPUT_GET, 'nome',  FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $nome="";
}
if(isset($_POST['senha'])){
    $senha=filter_input(INPUT_POST, 'senha',  FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['senha'])){
    $senha=filter_input(INPUT_GET, 'senha',  FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $senha="";
}
if(isset($_POST['id'])){
    $id=filter_input(INPUT_POST, 'id',  FILTER_SANITIZE_SPECIAL_CHARS);
}elseif(isset($_GET['id'])){
    $id=filter_input(INPUT_GET, 'id',  FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id=0;
}
