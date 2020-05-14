<?php
require_once("./Manager.php");

class RectangleManager extends Manager{

     function __construct(){
         $this->tableName="Rectangle";
     }

     public function add($objet){
        $sql="insert into  $this->tableName (longueur,largeur) values(".$objet->getLongueur().",".$objet->getLargeur().")";
       return  $this->executeUpdate( $sql)!=0;
    }
    public function update($objet){
      $sql="update $this->tableName set longueur,largeur=".$objet->getLongueur().",".$objet->getLargeur()." where id=$id";
      return  $this->executeUpdate( $sql)!=0;
    }
    public  function delete($id){
       $sql="delete from $this->tableName where id=$id";
       return  $this->executeUpdate( $sql)!=0;
    }
    public function findAll(){
       $sql="select * from  $this->tableName";
       return $this->executeSelect($sql);
    }
    public function findById($id){
      $sql="select from  $this->tableName where id=$id";
      return  $this->executeUpdate( $sql)!=0;
    }
    }