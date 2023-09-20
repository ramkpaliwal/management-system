<?php

namespace App\Controllers;

use App\Models\Coursemodel;
use App\Models\Studentmodel;
use App\Models\Departmentmodel;

class StudentController extends BaseController
{
    public function index()
    {
        return view('student');
    }

    public function addstudent()
    {
        $data = [];
        $activeCourses = [];
        helper('form');

        $departmentModel = new Departmentmodel();
        $courseModel = new Coursemodel();




        if ($this->request->getMethod() == 'post') {


            $rules = $this->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'qualification' => 'required',
                'department' => 'required',
                'course' => 'required',
                'mob_no' => 'required',
                'hobby' => 'required',
                'email' => 'required',
                'address' => 'required'
            ]);

            if ($rules) {
                $studentmodel = new Studentmodel();
                $studentmodel->save([
                    'first_name' => $this->request->getPost('first_name'),
                    'last_name' => $this->request->getPost('last_name'),
                    'qualification' => $this->request->getPost('qualification'),
                    'department' => $this->request->getPost('department'),
                    'course' => $this->request->getPost('course'),
                    'mob_no' => $this->request->getPost('mob_no'),
                    'hobby' => $this->request->getPost('hobby'),
                    'email' => $this->request->getPost('email'),
                    'address' => $this->request->getPost('address'),
                ]);
            } else {
                $data['validation'] = $this->validator;
            }
        }

        $activeDepartments = $departmentModel->getActiveDepartments();
        $data['activeDepartments'] = $activeDepartments;

        // Fetch active courses for the selected department (if a department is selected)
        $selectedDepartment = $this->request->getPost('department');
        if ($selectedDepartment) {
            $activeCourses = $courseModel->getActiveCoursesByDepartment($selectedDepartment);
        }

        // Pass activeCourses to the view even if it's empty
        $data['activeCourses'] = $activeCourses;



        return view('addstudent', $data);
    }
}