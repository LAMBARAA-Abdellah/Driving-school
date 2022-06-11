<?php
class Users
{
    private $db;
    public function __construct()
    {
        $this->db = new database();
    }
    public function CheckLogin($data)
    {
        // var_dump($data);
        $this->db->query('SELECT * FROM utilisateur WHERE email = :email AND pass = :pass');
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':pass', $data['pass']);
        
        try {
            $row = $this->db->single();
            if ($row) {
                $data = [
                    "row" => $row,
                    "role" => "Utilisateur"
                ];
                return $data;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
    }
       

}