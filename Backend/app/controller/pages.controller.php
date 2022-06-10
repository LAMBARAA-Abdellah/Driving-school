<?php
class Pages extends controller
{
    public function __construct()
    {
        $this->studentModel = $this->model('students');
           
    }
    public function index()
    {
        $students = $this->studentModel->getStudents();
            
            if($students){
                $data = [
                'students' => $students
            ];
            return $this->view('pages/home', $students);
            }

    
    }
}
