<?php

namespace App\Controllers;

use App\Models\Departmentmodel;
use App\Models\Coursemodel;

class CourseController extends BaseController
{
    public function index()
    { 
        $session = \Config\Services::session();
        $data['session'] = $session;
        $courseModel = new Coursemodel();
        $departmentModel = new Departmentmodel();
        $courses = $courseModel->getRecords();
        
        foreach ($courses as &$course) {
           $course['department_name'] = $departmentModel->getDepartmentNameById($course['department']);
        }
       
        $data['courses'] = $courses;
        return view('courseview', $data);
    }

    public function addcourse()
    {
        $data = [];
        $session = \Config\Services::session();
        helper('form');
        $data['session'] = $session;
        $model = new Departmentmodel();
        $activeDepartments = $model->getActiveDepartments();
        $data['departmentsArray'] = $activeDepartments;
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'course' => 'required',
                'department' => 'required',
                'duration' => 'required',
                'description' => 'required',
            ]);

            if ($input) {

                $model = new Coursemodel();
                $model->save([
                    'c_name' => $this->request->getPost('course'),
                    'department' => $this->request->getPost('department'),
                    'duration' => $this->request->getPost('duration'),
                    'description' => $this->request->getPost('description'),
                ]);

                $session->setFlashdata('success', 'Department created successfully');

                return redirect()->to('course');

            } else {
                $data['validation'] = $this->validator;
            }


        }
        return view('addcourse', $data);
    }

    public function editcourse($id = null){

        $data = [];
        $session = \Config\Services::session();
        helper('form');
        $data['session'] = $session;
        $model = new Departmentmodel();
        $activeDepartments = $model->getActiveDepartments();
        $data['departmentsArray'] = $activeDepartments;
        $coursemodel = new Coursemodel();
        $data['course'] = $coursemodel->find($id);
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'courses_id' => 'required',
                'course' => 'required',
                'department' => 'required',
                'duration' => 'required',
                'description' => 'required',
            ]);

            if ($input) {

                $model = new Coursemodel();
                $request_id = $this->request->getPost('courses_id');
                $model->update($request_id,[
                    'c_name' => $this->request->getPost('course'),
                    'department' => $this->request->getPost('department'),
                    'duration' => $this->request->getPost('duration'),
                    'description' => $this->request->getPost('description'),
                ]);

                $session->setFlashdata('success', 'Department created successfully');

                return redirect()->to('course');

            } else {
                $data['validation'] = $this->validator;
            }


        }
        return view ('editcourse',$data);
    }

    public function deletecourse($id) {
        // Load the Departmentmodel or create an instance if not loaded yet
        $model = new Coursemodel();
    
        // Toggle the status and get the updated department
        $course = $model->toggleStatus($id);
    
        if ($course) {
            $message = ($course['status'] === 'active') ? 'Course set to active' : 'Course set to inactive';
            // Redirect to the department list page with a success message
            return redirect()->to('course')->with('success', $message);
        } else {
            // Handle the case where the toggle failed
            return redirect()->to('course')->with('error', 'Failed to toggle department status');
        }
    }
    
    public function getCourseByDepartment($id){
        $courseModel = new Coursemodel();
        $data = $courseModel->getActiveCoursesByDepartment($id);
        return json_encode(['result' => $data]);
    }

}

