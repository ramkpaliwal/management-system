<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function course(): string
    {
        $session = \Config\Services::session();
        helper('form');
        $data = [];
        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'c_name' => 'required',
                'department' => 'required',
                'duration' => 'required',
                'description' => 'required'
            ]);

            if ($input) {

            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view('courseview',$data);
    }

}