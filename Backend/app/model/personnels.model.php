
<?php
class personnels
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
    public function addPersonnel($data)
    {
        $this->db->query('INSERT INTO utilisateur (nom_utilisateur,prenom_utilisateur,email,login,pass,tel,cin,adresse,datNaissance,sexe,profession,photo) VALUES (:nom_utilisateur ,:prenom_utilisateur,:email ,:login,:pass, :tel, :cin, :adresse, :datNaissance, :sexe,:profession,:photo)');
        $this->db->bind(':nom_utilisateur', $data['nom_utilisateur']);
        $this->db->bind(':prenom_utilisateur', $data['prenom_utilisateur']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':login', $data['login']);
        $this->db->bind(':pass', $data['pass']);
        $this->db->bind(':tel', $data['tel']);
        $this->db->bind(':cin', $data['cin']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':datNaissance', $data['datNaissance']);
        $this->db->bind(':sexe', $data['sexe']);
        $this->db->bind(':profession', $data['profession']);
        $this->db->bind(':photo', $data['photo']);
        var_dump($data);
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
    public function getPersonnel($id)
    {
        $this->db->query('SELECT * FROM utilisateur WHERE id_utilisateur = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->fetch();
        return $row;
    }
    public function getPersonnels(){
        $this->db->query('SELECT * FROM utilisateur');
        $results = $this->db->fetchAll();
        return $results;
    }
    public function updatePersonnel($data)
    {
        $this->db->query('UPDATE utilisateur SET nom_utilisateur = :nom_utilisateur, prenom_utilisateur = :prenom_utilisateur, email = :email, login = :login, pass = :pass, tel = :tel, cin = :cin, adresse = :adresse, datNaissance = :datNaissance, sexe = :sexe, profession = :profession, photo = :photo WHERE id_utilisateur = :id_utilisateur');
        $this->db->bind(':id_utilisateur', $data['id_utilisateur']);
        $this->db->bind(':nom_utilisateur', $data['nom_utilisateur']);
        $this->db->bind(':prenom_utilisateur', $data['prenom_utilisateur']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':login', $data['login']);
        $this->db->bind(':pass', $data['pass']);
        $this->db->bind(':tel', $data['tel']);
        $this->db->bind(':cin', $data['cin']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':datNaissance', $data['datNaissance']);
        $this->db->bind(':sexe', $data['sexe']);
        $this->db->bind(':profession', $data['profession']);
        $this->db->bind(':photo', $data['photo']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function deletePersonnel($id)
    {
        $this->db->query('DELETE FROM utilisateur WHERE id_utilisateur = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
  
}

?>