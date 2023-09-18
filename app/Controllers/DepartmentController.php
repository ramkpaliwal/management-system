<?php

namespace App\Controllers;

use App\Models\Departmentmodel;

class DepartmentController extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;
        $model = new Departmentmodel();
        $departmentArray = $model->getRecords();
        $data['departmentsArray'] = $departmentArray;
        return view('department', $data);
    }

    public function adddepartment()
    {
        $session = \Config\Services::session();
        helper('form');
        $data = [];
        $data['session'] = $session;
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'department' => 'required',
                'description' => 'required'
            ]);

            if ($input) {

                $model = new Departmentmodel();
                $model->save([
                    'd_name' => $this->request->getPost('department'),
                    'description' => $this->request->getPost('description'),
                ]);

                $session->setFlashdata('success', 'Department created successfully');

                return redirect()->to('department');

            } else {
                $data['validation'] = $this->validator;
            }
        }


        /*
        
        $data['title'] = "Anurag"
        $data['gf'] = "dviya"
        title => "anurag",
        gf => "divya
        [
        title => "anurag",
        gf => "divya"
        ]
        $data->title x
        $title correct
        
        */
        return view('adddepartment', $data);


    }


    public function editdepartment($id = null)
    {
        $data = [];
        $session = \Config\Services::session();
        helper('form');
        $model = new Departmentmodel();
        $department = $model->getRow($id);
        $data['department'] = $department;
        $data['session'] = $session;
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'department_id' => 'required',
                'department' => 'required',
                'description' => 'required'
            ]);

            if ($input) {
                $request_id = $this->request->getPost('department_id');
                $model = new Departmentmodel();
                $model->update($request_id,[
                    'd_name' => $this->request->getPost('department'),
                    'description' => $this->request->getPost('description'),
                ]);

                $session->setFlashdata('success', 'Department updated successfully');

                return redirect()->to('department');

            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('editdepartment', $data);



    }


    public function deletedepartment($id) {
        // Load the Departmentmodel or create an instance if not loaded yet
        $model = new Departmentmodel();
    
        // Toggle the status and get the updated department
        $department = $model->toggleStatus($id);
    
        if ($department) {
            $message = ($department['status'] === 'active') ? 'Department set to active' : 'Department set to inactive';
            // Redirect to the department list page with a success message
            return redirect()->to('department')->with('success', $message);
        } else {
            // Handle the case where the toggle failed
            return redirect()->to('department')->with('error', 'Failed to toggle department status');
        }
    }
    
    
    
    

}