<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{

    public function __construct(){
        
    }

    public function getPatient(){
        $db = db_connect();
        $query = $db->query("SELECT * from patient");
        
        $result = $query->getResultArray();
        return $result;
    }
}