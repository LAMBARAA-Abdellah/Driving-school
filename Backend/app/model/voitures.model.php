
<?php
class voitures
{
    private $db;


    public function __construct()
    {
        $this->db = new database();
    }



    public function getVoitures()
    {
        $this->db->query('SELECT * FROM voiture');
        // $results = $this->db->execute();
        $results = $this->db->fetchAll();
        return $results;
    }
    public function addVoiture($data){
        $this->db->query('INSERT INTO voiture (marque,matricule,module,photo,id_utilisateur) VALUES (:marque ,:matricule,:module ,:photo, :id_utilisateur)');
        $this->db->bind(':marque', $data['marque']);
        $this->db->bind(':matricule', $data['matricule']);
        $this->db->bind(':module', $data['module']);
        $this->db->bind(':photo', $data['photo']);
        $this->db->bind(':id_utilisateur', $data['id_utilisateur']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getVoiture($id)
    {
        $this->db->query('SELECT * FROM voiture WHERE id_voiture = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
    }
    public function updateVoiture($data)
    {
        $this->db->query('UPDATE voiture SET marque = :marque, matricule = :matricule, module = :module, photo = :photo WHERE id_voiture = :id_voiture');
        $this->db->bind(':id_voiture', $data['id_voiture']);
        $this->db->bind(':marque', $data['marque']);
        var_dump("hhhhh");
        $this->db->bind(':matricule', $data['matricule']);
        $this->db->bind(':module', $data['module']);
        $this->db->bind(':photo', $data['photo']) ;
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteVoiture($id)
    {
        $this->db->query('DELETE FROM voiture WHERE id_voiture = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
}

?>