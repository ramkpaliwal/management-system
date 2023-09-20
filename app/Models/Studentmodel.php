<?php

namespace App\Models;

use CodeIgniter\Model;

class Studenttmodel extends Model
{
    protected $table = 'student';
    protected $allowedFields = ['first_name', 'last_name', 'address', 'mob_no', 'email', 'qualification', 'course', 'hobby', 'status'];

    public function getRecords()
    {
        return $this->findAll();
    }

}