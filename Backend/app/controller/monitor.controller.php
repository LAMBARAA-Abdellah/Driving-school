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
    public function updateMonitor()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json,true);
           // $data = array_values((array)$data);
            echo json_encode($data);
           $this->monitorModel->updateMonitor($data);
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




    public function deleteMonitor()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $this->monitorModel->deleteMonitor($id);
        }
    }

}
