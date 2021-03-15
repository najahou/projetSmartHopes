<?php
require ('dao.php');
require ('cnx.php');

class BesoinService implements dao
{



    function __construct()
    {
        $c = new connexion();
        $this-> db = $c->getdb();
    }
    function add($besoin){

        $st = $this->db->prepare("insert into demande(capture, msg_vocale,type_demande,patient_id) values (?,?,'besoin',?)");
        if($st->execute(array(


            $besoin->getCapture(),
            $besoin->getMsgVocale(),
            $besoin->getPatientid()


        )));
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

            $st = $this->db->prepare("SELECT * FROM demande WHERE id_demande = ? and type_demande = 'besoin'");

            $st->execute([$id]);
            $row = $st->fetch();
            if($row != null) {

                return $row;
            }
            return null;

        }
        catch(PDOException $e) {
            echo 'Error :' .$e->getMessage();
        }
    }
    function findbyidgeimage($id)
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT * FROM personne WHERE id = ? and type_personne = 'patient'");

            $st->execute([$id]);
            $row = $st->fetch();
            if($row != null) {

                return $row[11];
            }
            return null;

        }
        catch(PDOException $e) {
            echo 'Error :' .$e->getMessage();
        }
    }
    function findbyidgetname($id)
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT * FROM personne WHERE id = ? and type_personne = 'patient'");

            $st->execute([$id]);
            $row = $st->fetch();
            if($row != null) {

                return $row[5].' '.$row[6];
            }
            return null;

        }
        catch(PDOException $e) {
            echo 'Error :' .$e->getMessage();
        }
    }
    function findall()
    {
        $req =$this->db->prepare("select * from demande where type_demande = 'besoin'");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }
    function findallpatient()
    {
        $req =$this->db->prepare("select * from personne where type_personne = 'patient'");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }
}
?>