<?php
include_once "DB.php";

class Type extends DB{
    function __construct()
    {
        parent::__construct('types');
    }

    /**
     * $id => 大分類的id
     */

    function hasMid($id){
        return $this->count(['big'=>$id]);
    }
    
    function getMids($id){
        return $this->all(['big'=>$id]);
    }

    /**
     * $id => 中分類的id
     */
    function getBig($id){
        $row=$this->find($id);
        return $this->find($row['big']);
    }

    function type($id){
        $row=$this->find($id);
        return ($row['big']==0)?'big':'mid';
    }

    function nav($id){
        
    }
}