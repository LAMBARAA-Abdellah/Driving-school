
<?php
class students
{
    private $db;


    public function __construct()
    {
        $this->db = new database();
    }

    public function addVoiture($data){
        $this->db->query('INSERT INTO voiture (marque,modele,,matricule,id_utilisateur) VALUES (:marque , :modele,:couleur,:matricule,:id_utilisateur)');
        $this->db->bind(':marque', $data['marque']);
        $this->db->bind(':modele', $data['modele']);
        $this->db->bind(':couleur', $data['couleur']);
        $this->db->bind(':matricule', $data['matricule']);
        $this->db->bind(':id_utilisateur', $data['id_utilisateur']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
}

?>