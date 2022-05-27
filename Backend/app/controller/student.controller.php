<?php

class student extends controller{

        public function __construct()
        {
            $this->studentModel = $this->model('students');
           
        }
        public function add(){
            $data = [
                'name' => '',
                
            ];
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $data['name'] = $_POST['name'];
               
                if(empty($data['name'])){
                    $data['success'] = 'Name is required';
                    // return $this->view('pages/home', $data);
                    redirect('pages/index');
                }
                else{
                    // $this->studentModel->addStudent($data);
                    if($this->studentModel->addStudent($data)){
                        $data['success'] = 'Student added successfully';
                        return $this->view('pages/home', $data);
                    }
                    else{
                        $data['success'] = 'Something went wrong';
                    }
                }
            }
            return $this->view('pages/home', $data);

        }
        public function addRDV()
  {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $addApp = $this->model('RDVModel');
      $json = file_get_contents('php://input');
      $data = json_decode($json);
      $data = array_values((array)$data);
      $addApp->insertRDV($data);
      // var_dump($data);
      echo json_encode($data);
      // if ($created) {
      //   echo json_encode($data);
      // }
    }
  }
        public function addStudent(){
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                $json = file_get_contents('php://input');
                $data = json_decode($json, true);
                // $data = array_values((array)$data);
            //    var_dump($data);
               echo json_encode($data);
                $reponse=$this->studentModel->addStudent($data);
                //echo json_encode($reponse);
            }
           

        }
        public function allStudents(){
            $students = $this->studentModel->getStudents();
            echo json_encode($students);
            
        }



        public function updateRDV()
        {
          // var_dump($_GET['id']);
          echo ("this is update function");
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // echo ('im in if');
            $UpdateRDV = $this->model('RDVModel');
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            $Updatet = $UpdateRDV->updateRDV($data);
            echo json_encode($Updatet);
            // if ($created) {
            //   echo json_encode($created);
            // }
          }
        }

        public function updateStudent(){
            if ($_SERVER["REQUEST_METHOD"] === "POST"){
                // $id=$_POST['id'];
                $json = file_get_contents('php://input');
                $data = json_decode($json);
                var_dump($data);
                $id=$data->id;
                $data = array_values((array)$data);
                //echo json_encode($data);
                $reponse=$this->studentModel->updateStudent($data,$id); 
              
            }
        }
        

        public function deleteStudent(){
            if ($_SERVER["REQUEST_METHOD"] === "GET") {
                $id=$_GET['id'];
            $this->studentModel->deleteStudent($id);
            }
        }


        public function deleteRdv()
        {
          if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $user = $this->model('UserModel');
            $user->delete_r($_GET['id']);
          }
        }









        public function getOne()
        {
          $select = $this->model('UserModel');
          $selected = $select->selectAll();
          echo json_encode($selected);
        }
      


        public function index(){
            $students = $this->studentModel->getStudents();
            
            if($students){
                $data = [
                'students' => $students
            ];
            return $this->view('pages/home', $data);
            }
            
            
        }
}
