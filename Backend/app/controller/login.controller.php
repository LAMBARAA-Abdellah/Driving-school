<?php

class login extends controller
{
    
    public function __construct()
    {
        // die("hello");
        $this->UserModel = $this->model('Users');
        $this->AdminModel = $this->model('Admins');
    }
    public function CheckLogin()
    {
        // die('CheckLogin');
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            // $data = array_values((array)$data);
            //    var_dump($data);
            // echo json_encode($data);
            $reponse = $this->AdminModel->CheckLogin($data);
            if($reponse){
                echo json_encode(array('reponse' => 'true', 'data' => $reponse));
            }elseif( $reponse = $this->UserModel->CheckLogin($data))
            {
                echo json_encode(array('reponse' => 'true', 'data' => $reponse));

            }
            else {
                echo json_encode(array('reponse' => 'email or mot de passe incorrect'));
            }
            // http://localhost/Statique/Backend/login/CheckLogin
            //echo json_encode($reponse);
        }
    }


}
