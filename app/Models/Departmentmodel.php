<?php

namespace App\Models;

use CodeIgniter\Model;

class Departmentmodel extends Model{
    
    protected $table = 'department';
    protected $allowedFields = ['d_name','description','status'];

    public function getRecords(){
        return $this->findAll();
    }

    public function getRow($id){
        return $this->where('id',$id)->first();
    }
     public function toggleStatus($id) {
        // Check if the department with the given ID exists
        $department = $this->find($id);
    
        if (!$department) {
            // Handle the case where the department doesn't exist
            return false; // Indicate that the operation failed
        }
    
        // Toggle the status
        $currentStatus = $department['status'];
        $newStatus = ($currentStatus == 'active') ? 'inactive' : 'active';
    
        // Update the status
        $data = ['status' => $newStatus];
        $result = $this->update($id, $data);
    
        if ($result) {
            // Return the updated department
            $department['status'] = $newStatus;
            return $department;
        } else {
            // Handle the case where the update failed
            return false; // Indicate that the operation failed
        }
    }


    public function getActiveDepartments()
    {
        // Assuming you have a 'status' column in your departments table
        return $this->where('status', 'active')->findAll();
    }

    public function getDepartmentNameById($id){
        $departmentData = $this->find($id);
        return $departmentData['d_name'];
    }
    
}






    









  

