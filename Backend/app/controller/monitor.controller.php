<?php

class monitor extends controller
{

    public function __construct()
    {
        $this->monitorModel = $this->model('monitors');
    }
   
    public function addMonitor()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            // $data = array_values((array)$data);
            //    var_dump($data);
            echo json_encode($data);
            $reponse = $this->monitorModel->addMonitor($data);
            echo "addd width succes";
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

    public function getMonitor()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $reponse = $this->monitorModel->getMonitor($id);

            echo json_encode($reponse);
        }
    }
    public function allMonitors()
    {
        $smonitors= $this->monitorModel->getMonitors();
        echo json_encode($smonitors);
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

}
