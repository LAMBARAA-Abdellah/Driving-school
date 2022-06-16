<?php

class chat extends controller
{

    public function __construct()
    {
        $this->chatModel = $this->model('chats');
    }
    public function index()
    {
    }
    public function addMessage()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);
            // $data = array_values((array)$data);
            //    var_dump($data);
            echo json_encode($data);
            $reponse = $this->chatModel->addMessage($data);
            //echo json_encode($reponse);
        }
    }
    public function getMessages()
    {

        $reponse = $this->chatModel->getMessages();
        echo json_encode($reponse);
    }
    public function deleteMessage()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $this->chatModel->deleteMessage($id);
            echo "delete width succes";
        }
    }
    public function archiveMessage()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $this->chatModel->archiveMessage($id);
            echo "archive width succes";
        }
    }
    public function cancel(){
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            $id = $_GET['id'];
            $this->chatModel->cancel($id);
            echo "cancel width succes";
        }
    }
}
