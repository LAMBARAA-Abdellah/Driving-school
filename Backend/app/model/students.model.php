
<?php
class students
{
    private $db;


    public function __construct()
    {
        $this->db = new database();
    }


    public function addStudent($data)
    {
        $this->db->query('INSERT INTO candidat (nom_candidat,prenom_candidat,email,tel,cin,adresse,datNaissance,sexe,permis,Total,avance,photo,id_utilisateur) VALUES (:nom_candidat , :prenom_candidat,:email,:tel,:cin,:adresse,:datNaissance,:sexe,:permis,:Total,:avance,:photo,:id_utilisateur)');
        // $this->db->bind(':nom_candidat', $data['nom_candidat'],':prenom_condidat', $data['prenom_candidat'],':email', $data['email'],':tel', $data['tel'],':cin', $data['cin'],':adresse', $data['adresse'],':datNaissance', $data['datNaissance'],':sexe', $data['sexe'],':permis', $data['permis'], ':Total', $data['Total'],':avance', $data['avance'],':id_utilisateur', $data['id_utilisateur']);
        $this->db->bind(':nom_candidat', $data['nom_candidat']);
        $this->db->bind(':prenom_candidat', $data['prenom_candidat']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':tel', $data['tel']);
        $this->db->bind(':cin', $data['cin']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':datNaissance', $data['datNaissance']);
        $this->db->bind(':sexe', $data['sexe']);
        $this->db->bind(':permis', $data['permis']);
        $this->db->bind(':Total', $data['Total']);
        $this->db->bind(':avance', $data['avance'] || 0);
        $this->db->bind(':photo', $data['photo']);
        $this->db->bind(':id_utilisateur', $data['id_utilisateur']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function getStudent($id)
    {
        $this->db->query('SELECT * FROM candidat WHERE id_Candidat = :id');
        $this->db->bind(':id', $id);
        return $this->db->fetch();
    }


    public function getStudents()
    {
        $this->db->query('SELECT * FROM candidat');
        // $results = $this->db->execute();
        $results = $this->db->fetchAll();
        return $results;
    }


    function deleteStudent($id)
    {
        $this->db->query('DELETE FROM candidat WHERE id_Candidat = :id_candidat');
        $this->db->bind(':id_candidat', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //update candidat
    function updateStudent($data)
    {
        $this->db->query('UPDATE candidat SET nom_candidat = :nom_candidat, prenom_candidat = :prenom_candidat, email = :email, tel = :tel, cin = :cin, adresse = :adresse, datNaissance = :datNaissance, sexe = :sexe, permis = :permis, Total = :Total, avance = :avance, photo=:photo WHERE id_Candidat = :id_Candidat');
        $this->db->bind(':nom_candidat', $data['nom_candidat']);
        $this->db->bind(':prenom_candidat', $data['prenom_candidat']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':tel', $data['tel']);
        $this->db->bind(':cin', $data['cin']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':datNaissance', $data['datNaissance']);
        $this->db->bind(':sexe', $data['sexe']);
        $this->db->bind(':permis', $data['permis']);
        $this->db->bind(':Total', $data['Total']);
        $this->db->bind(':avance', $data['avance'] );
        $this->db->bind(':photo', $data['photo']);
        //$this->db->bind(':id_utilisateur', $data[11]);
        $this->db->bind(':id_Candidat', $data['id_Candidat'] );
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    function addTranche($data)
    {
        $this->db->query('INSERT INTO tranche (id_Candidat,tranche) VALUES (:id_Candidat , :tranche)');
        $this->db->bind(':id_Candidat', $data['id_Candidat']);
        $this->db->bind(':tranche', $data['tranche']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>