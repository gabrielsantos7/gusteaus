<?php

namespace Gusteaus\Core;

abstract class DAO
{

    protected static string $tabela = "";
    protected static string $classe = \stdClass::class;
    protected static string $columnId = "";

    
 
    public static function insert(Entity $entidade)
    {
        $db = new Database;
        $tabela = static::$tabela;

        $sql = "INSERT INTO {$tabela}";

        $campos = [];
        $coringas = [];
        $dados = [];
        $propriedades = $entidade->getProps();

        foreach($propriedades as $propriedade => $valor)
        {
            if( !is_null( $entidade->$propriedade ) ){
                array_push($campos,$propriedade);
                array_push($dados,$valor);
                array_push($coringas,'?');
            }
        }


       $campos = implode(',',$campos); 
       $coringas = implode(',',$coringas);
       $sql .= " ({$campos}) VALUES ({$coringas})";

        
     
             
       return $db->execute($sql,$dados);
    }

    
    public static function edit(Entity $entidade)
    {
        $db = new Database;
        $tabela = static::$tabela;
        $columnId = static::$columnId; 
   
        $sql = "UPDATE {$tabela} SET";
        
        $propriedades = $entidade->getProps();
        $dados = [];
        $campos = "";

        foreach($propriedades as $propriedade => $valor)
        {
            if($propriedade != $columnId && !is_null($entidade->$propriedade))
            {
                $campos .= " {$propriedade} = ?,";
                array_push($dados,$valor); 
            }
        }
        
        $campos = rtrim($campos,',');
        $sql .= "{$campos} WHERE {$columnId} = ?";
        array_push($dados, $entidade->$columnId);        
        return $db->execute($sql,$dados);

    }

    public static function getAll()
    {

        $db = new Database;
        $tabela = static::$tabela;
        $sql = "SELECT * FROM {$tabela}";
        $db->execute($sql);

        return $db->getAll(static::$classe );


    }

    public static function getById($id)
    {
        $db = new Database;
        $tabela = static::$tabela;
        $columnId = static::$columnId;
        
        $sql = "SELECT * FROM {$tabela} WHERE {$columnId} = ?"; 
        
        $db->execute($sql, [$id]);
    
        return $db->get(static::$classe);
    }
    
    public static function delete(Entity $entidade)
    {
        $db = new Database;
        $tabela = static::$tabela;
        $columnId = static::$columnId; 
        
        $sql = "DELETE FROM {$tabela} WHERE {$columnId} = ?";
        
        return $db->execute($sql, [$entidade->$columnId]); 
    }

}