<?php
require ('dao.php');
require ('cnx.php');

class ServiceUrgent implements dao{


    private $db;
    function __construct()
    {
        $c = new connexion();
        $this-> db = $c->getdb();
    }


    function add($urgent)
    {
        // TODO: Implement add() method.
        $st = $this->db->prepare("insert into demande(patient_id,  description,type_demande) values (?,?,?)");
        if($st->execute(array(


            $urgent->getPatientId(),
            $urgent->getDescription(),
            $urgent->getTypeDemande()


        ))){
            return true;

        }
        else{
            return false;
        }
    }

    function update($o)
    {
        // TODO: Implement update() method.
    }

    function delete($Id)
    {

        try{
            $st = $this->db->prepare('delete from demande where id_demande =?');
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

            $st = $this->db->prepare("SELECT * FROM demande WHERE type_demande = 'besoin'");

            $st->execute([$id]);
            $row = $st->fetch();
            if($row != null) {
                $urgent = new urgent();
                $urgent =new $urgent->Construct1($row[0], $row[1], $row[2], $row[3],);
                return $urgent;
            }
            return null;

        }
        catch(PDOException $e) {
            echo 'Error :' .$e->getMessage();
        }
    }

    function findall()
    {
        $req =$this->db->prepare("select * from demande");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }

    function findallpatient()
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