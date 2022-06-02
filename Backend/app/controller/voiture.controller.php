<?php

class voiture extends controller
{

    public function __construct()
    {
        $this->voitureModel = $this->model('voitures');
    }
    //add car function
    public function addVoiture()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Sanitize POST array
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            echo json_encode($data);
            
            $this->voitureModel->addVoiture($data);
            var_dump("jawad");

        }      
    }
    public function allVoiture()
    {
        $voitures = $this->voitureModel->getVoitures();
        echo json_encode($voitures);
    }
    public function getVoiture($id)
    {
        $voiture = $this->voitureModel->getVoiture($id);
        echo json_encode($voiture);
    }
    public function updateVoiture()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            $this->voitureModel->updateVoiture($data);

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
    public function deleteVoiture()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
        $this->voitureModel->deleteVoiture($id);
        var_dump("deleted");
        }
    }


    
 
  









   
}
