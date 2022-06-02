<?php

class personnel extends controller
{

    public function __construct()
    {
        $this->personnelModel = $this->model('personnels');
    }
    //add personnel function
    public function addPersonnel()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            echo json_encode($data);
            $this->personnelModel->addPersonnel($data);
            var_dump("add width succes");

        }      
    }
    
    public function addStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
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

    public function getStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $reponse = $this->studentModel->getStudent($id);

            echo json_encode($reponse);
        }
    }
    public function allStudents()
    {
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




    public function deleteStudent()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $this->studentModel->deleteStudent($id);
            var_dump( $this->studentModel->deleteStudent($id));
        }
    }

    
}
