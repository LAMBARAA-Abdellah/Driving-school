
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
    public function addPersonnel($data){
        $this->db->query('INSERT INTO utilisateur (nom_utilisateur,prenom_utilisateur,email,pass,tel,cin,adresse,datNaissance,sexe;profession,id_utilisateur) VALUES (:nom_utilisateur ,:prenom_utilisateur,:email ,:pass, :tel, :cin, :adresse, :datNaissance, :sexe;:profession, :id_utilisateur)');
        $this->db->bind(':nom_utilisateur', $data['nom_utilisateur']);
        $this->db->bind(':prenom_utilisateur', $data['prenom_utilisateur']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':pass', $data['pass']);
        $this->db->bind(':tel', $data['tel']);
        $this->db->bind(':cin', $data['cin']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':datNaissance', $data['datNaissance']);
        $this->db->bind(':sexe', $data['sexe']);
        $this->db->bind(':profession', $data['profession']);
        $this->db->bind(':id_utilisateur', $data['id_utilisateur']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function addVoiture($data){
        $this->db->query('INSERT INTO voiture (marque,matricule,module,photo,id_utilisateur) VALUES (:marque ,:matricule,:module ,:photo, :id_utilisateur)');
        $this->db->bind(':marque', $data['marque']);
        $this->db->bind(':matricule', $data['matricule']);
        $this->db->bind(':module', $data['module']);
        $this->db->bind(':photo', $data['photo']);
        $this->db->bind(':id_utilisateur', $data['id_utilisateur']);
        if ($this->db->execute()) {
            var_dump("jawad");
            return true;
        } else {
            return false;
        }
    }
    public function getVoiture($id)
    {
        $this->db->query('SELECT * FROM voiture WHERE id = :id');
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