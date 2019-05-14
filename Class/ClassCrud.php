<?php
include("ClassConexao.php");

Class ClassCrud extends ClassConexao{
    private $crud;
    private $contador;

    #Preparacao das declarativas
    public function preparedStatements($query, $parametros){
        $this->countParametros($parametros);
        $this->crud=$this->conectaDb()->prepare($query);
        
        if($this->contador > 0){
            for($i=1;$i<=$this->contador;$i++){
                $this->crud->bindValue($i,$parametros[$i-1]);
            }
        }
        $this->crud->execute();
    }

    #Contador de parametros
    private function countParametros($parametros){
        $this->contador=count($parametros);
    }

    #Insert no BD
    public function insertDB($tabela, $condicao, $parametros){
        $this->preparedStatements("insert into {$tabela} values({$condicao})", $parametros);
        return $this->crud;
    }

    #Select no DB
    public function selectDB($campos, $tabela, $condicao, $parametros){
        $this->preparedStatements("select {$campos} from {$tabela} {$condicao}", $parametros);
        return $this->crud;
    }
}