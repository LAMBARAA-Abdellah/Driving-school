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
            $data['pass'] = uniqid();
            echo json_encode($data);
            $this->personnelModel->addPersonnel($data);
            var_dump("add width succes");
        }
    }
    public function updatePersonnel()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sanitize POST array
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            echo json_encode($data);
            $this->personnelModel->updatePersonnel($data);
            var_dump("update width succes");
        }
    }


    public function allPersonnel()
    {
        $personnels = $this->personnelModel->getPersonnels();
        echo json_encode($personnels);
    }
    public function getPersonnel()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
        $personnel = $this->personnelModel->getPersonnel($id);
        echo json_encode($personnel);
    }
    }


    public function deletePersonnel()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
        $this->personnelModel->deletePersonnel($id);
        var_dump("deleted");
        }
    }
    
   
}
