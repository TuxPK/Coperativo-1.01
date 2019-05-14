<?php

Class ClassConexao{

    #Realiza conexao com o banco de dados
    public function conectaDB(){
        try{
            $con = new PDO("mysql:host=localhost;dbname=coperativo","root","");
            return $con;
        }catch(PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}