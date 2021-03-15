<?php
require('dao.php');
require ('cnx.php');

class patientservice implements dao{
    private $db;
    function __construct()
    {
        $c = new connexion();
        $this-> db = $c->getdb();
    }
    function add($patient){

        $st = $this->db->prepare("insert into personne(nom,prenom,cin,dat_naissance,sexe,telephone,adresse,num_dossier,ville,id_securite,photo,chambre_id,type_personne) value(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        if($st->execute(array(
            $patient->getNom(),
            $patient->getPrenom(),
            $patient->getCin(),
            $patient->getDatNaissance(),
            $patient->getSexe(),
            $patient->getTelephone(),
            $patient->getAdresse(),
            $patient->getNumDossier(),
            $patient->getVille(),
            $patient->getIdSecurite(),
            $patient->getPhoto(),
            $patient->getChambreId(),
            $patient->getTypepersonne()
        ))){
            return true;
        }
        else{
            echo  false;
        }
    }

    function update($patient)
    {
        // TODO: Implement update() method.
        try{


            $st = $this->db->prepare('UPDATE personne SET nom = ?,prenom = ?,
            cin = ?,dat_naissance = ?,sexe = ?,telephone = ?,
            adresse = ?,num_dossier = ?,ville = ?,id_securite = ?,
            photo = ?,chambre_id = ? WHERE id = ?');
            $st->execute(array(
                $patient->getNom(),
                $patient->getPrenom(),
                $patient->getCin(),
                $patient->getDatNaissance(),
                $patient->getSexe(),
                $patient->getTelephone(),
                $patient->getAdresse(),
                $patient->getNumDossier(),
                $patient->getVille(),
                $patient->getIdSecurite(),
                $patient->getPhoto(),
                $patient->getChambreId(),
                $patient->getId(),


            ));
            if($st->rowCount() > 0){
                return true;
                echo "Bien Modified";
            }
            return false;
        }
        catch(PDOException $e){
            echo "Error :" .$e->getMessage();;
        }


    }

    function delete($Id)
    {

        try{
            $st = $this->db->prepare('delete from personne where id =?');
            $st->execute(array($Id));
            if($st->rowCount() > 0){
                return true;
            }
            return false;

        }
        catch(PDOException $e){
            echo "Error :" .$e->getMessage();;
        }

    }

    function findbyid($id)
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT * FROM personne WHERE id = ? and type_personne='patient'");

            $st->execute([$id]);
            $row = $st->fetch();
            if($row != null) {
                $patient = new patient();
                $patient = $patient->construct1($row[5], $row[6],$row[3],$row[4],$row[7], $row[8],$row[2],$row[10]
                    , $row[12],$row[9],$row[11],$row[15]);
                return $patient;
            }
            return null;

        }
        catch(PDOException $e) {
            echo 'Error :' .$e->getMessage();
        }
    }


    function findallpharmacie(){
        $req =$this->db->prepare("select * from pharmacie");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }
    function findall()
    {
        $req =$this->db->prepare("select * from personne where type_personne='patient'");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }


}
?>