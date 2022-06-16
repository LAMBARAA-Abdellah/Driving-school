
<?php
class chats
{
    private $db;


    public function __construct()
    {
        $this->db = new database();
    }
    public function addMessage($data)
    {
        $this->db->query('INSERT INTO chat (name,email,phone,message) VALUES (:name,:email,:phone,:message)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':message', $data['message']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getMessages()
    {
        $this->db->query('SELECT * FROM chat ORDER BY dateCreation desc');
        $results = $this->db->fetchAll();
        return $results;
    }
    public function deleteMessage($id)
    {
        $this->db->query('DELETE FROM chat WHERE id = :id_chat');
        $this->db->bind(':id_chat', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function archiveMessage($id)
    {
        $this->db->query('UPDATE chat SET etat = :etat WHERE id = :id_chat');
        $this->db->bind(':etat', 1);
        $this->db->bind(':id_chat', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function cancel($id)
    {
        $this->db->query('UPDATE chat SET etat = :etat WHERE id = :id_chat');
        $this->db->bind(':etat', 0);
        $this->db->bind(':id_chat', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


   
}

?>