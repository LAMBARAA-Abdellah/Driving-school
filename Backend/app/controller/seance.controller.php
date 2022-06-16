<?php

class seance extends controller
{

    public function __construct()
    {
        $this->seanceModel = $this->model('seances');
    }
    public function index()
    {
    }
    public function addSeance()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            // $data = array_values((array)$data);
            //    var_dump($data);
            $reponse = $this->seanceModel->addSeance($data);
            echo "add seance width succes";
        }
    }
    public function getSeances()
    {

        $reponse = $this->seanceModel->getSeances();
        echo json_encode($reponse);
    }
   
}
