<?php

class student extends controller
{

    public function __construct()
    {
        $this->studentModel = $this->model('students');
    }
    public function index()
    {
        
    }
    public function add()
    {
        $data = [
            'name' => '',

        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data['name'] = $_POST['name'];

            if (empty($data['name'])) {
                $data['success'] = 'Name is required';
                // return $this->view('pages/home', $data);
                redirect('pages/index');
            } else {
                // $this->studentModel->addStudent($data);
                if ($this->studentModel->addStudent($data)) {
                    $data['success'] = 'Student added successfully';
                    return $this->view('pages/home', $data);
                } else {
                    $data['success'] = 'Something went wrong';
                }
            }
        }
        return $this->view('pages/home', $data);
    }
    
    public function addStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            // $data = array_values((array)$data);
            //    var_dump($data);
            echo json_encode($data);
            $reponse = $this->studentModel->addStudent($data);
            //echo json_encode($reponse);
        }
    }
    public function updateStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json,true);
           // $data = array_values((array)$data);
            echo json_encode($data);
           $this->studentModel->updateStudent($data);
            echo "update width succes";
        }
    }
    public function allStudents()
    {
        $students = $this->studentModel->getStudents();
        echo json_encode($students);
    }
    public function getStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $reponse = $this->studentModel->getStudent($id);

            echo json_encode($reponse);
        }
    }
  

    public function deleteStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $this->studentModel->deleteStudent($id);
            var_dump( $this->studentModel->deleteStudent($id));
        }
    }
    public function addTranche(){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            // $data = array_values((array)$data);
            //    var_dump($data);
            // echo json_encode($data);
            $reponse = $this->studentModel->addTranche($data);
           
            //echo json_encode($reponse);
        }
    }
    public function getTranche(){
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $reponse = $this->studentModel->getTranche($id);
            echo json_encode($reponse);
        }
    }
    public function archiveStudent(){
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $reponse = $this->studentModel->archiveStudent($id);
            echo json_encode($reponse);
        }
    }
    public function validateStudent(){
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            // $data = array_values((array)$data);
            //    var_dump($data);
             echo json_encode($data);
            $reponse = $this->studentModel->validateStudent($data);
           
            //echo json_encode($reponse);
        }
    }

    
}
