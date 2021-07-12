<?php

namespace  App\Models;

use MF\Model\Model;


class Lead extends Model
{

    private $id;
    private $nome;
    private $email;
  
    public function _get($atributo){
        return $this->$atributo;
    }
    
   public function _set($atributo, $valor){
       $this->$atributo = $valor;
   }
    public function salvar(){
        $query = " insert into leads(nome , email )values(:nome, :email)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome',$this->_get('nome'));
        $stmt->bindValue(':email',$this->_get('email'));
        $stmt->execute();
   }
}