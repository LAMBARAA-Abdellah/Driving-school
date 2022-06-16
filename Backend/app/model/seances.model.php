
<?php
class seances
{
    private $db;


    public function __construct()
    {
        $this->db = new database();
    }
    public function addSeance($data)
    {
        $this->db->query('INSERT INTO seance (date,debut,fin,seance) VALUES (:date,:debut,:fin,:seance)');
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':debut', $data['debut']);
        $this->db->bind(':fin', $data['fin']);
        $this->db->bind(':seance', $data['seance']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getSeances()
    {
        $this->db->query('SELECT * FROM seance ORDER BY seance.date DESC');
        $results = $this->db->fetchAll();
        return $results;
    }
    public function updateSeance($data)
    {
        $this->db->query('UPDATE seance SET date = :date, debut = :debut, fin = :fin, seance = :seance WHERE id = :id');
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':debut', $data['debut']);
        $this->db->bind(':fin', $data['fin']);
        $this->db->bind(':seance', $data['seance']);
        $this->db->bind(':id', $data['id']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteSeance($id)
    {
        $this->db->query('DELETE FROM seance WHERE id = :id_seance');
        $this->db->bind(':id_seance', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
   
}


?>