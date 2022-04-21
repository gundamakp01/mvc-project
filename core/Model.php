<?php
require_once './Request.php';
abstract class Model{
    

    abstract public function tableName();

    abstract public function primaryKey();

    // [
    //     'email' => 'ah.ng@gmail',
    //     'id' => 1
    // ]

    // public static function findOne($parm) {

    //     $table_name = $this->tableName();

    //     $keys = array_keys($parm);

    //     $query = "SELECT * from $table_name where"
        
    // }

    // public function attributes(){
    //     return [];
    // }

    // public function labels(){
    //     return [];
    // }
}