<?php

namespace App\models;
use CodeIgniter\Model;

class DML extends Model{
    protected $db;

    function __construct(){
        $this->db = db_connect();
    }

    function dataUpdate($table, $data, $where){
        $this->db->table($table)
                 ->where($where)
                 ->update($data);
        return $this->db->affectedRows();
    }

    function dataInsert($table, $data){
        $this->db->table($table)
                 ->insert($data);
        return $this->db->affectedRows();
    }

    function dataDelete($table, $where){
        $this->db->table($table)
                 ->delete($where);
        return $this->db->affectedRows();
    }

    function dataRead($table, $where = false){
       $data = $this->db->table($table);
        if($where !=false){
            $data->where($where);
        }
        return $data->get()->getresult();
    }
}