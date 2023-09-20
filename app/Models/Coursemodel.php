<?php

namespace App\Models;

use CodeIgniter\Model;

class Coursemodel extends Model
{
    protected $table = 'course';
    protected $allowedFields = ['c_name', 'department', 'duration', 'description', 'status'];

    public function getRecords()
    {
        return $this->findAll();
    }

    // Coursemodel.php

    public function getActiveCoursesByDepartment($department)
    {
        // Assuming you have a 'status' column in your courses table
        // and a 'department' column that stores the department's ID
        return $this->where('status', 'active')
            ->where('department', $department)
            ->findAll();
    }




    public function toggleStatus($id)
    {
        // Check if the department with the given ID exists
        $course = $this->find($id);

        if (!$course) {
            // Handle the case where the department doesn't exist
            return false; // Indicate that the operation failed
        }

        // Toggle the status
        $currentStatus = $course['status'];
        $newStatus = ($currentStatus == 'active') ? 'inactive' : 'active';

        // Update the status
        $data = ['status' => $newStatus];
        $result = $this->update($id, $data);

        if ($result) {
            // Return the updated department
            $course['status'] = $newStatus;
            return $course;
        } else {
            // Handle the case where the update failed
            return false; // Indicate that the operation failed
        }
    }




}