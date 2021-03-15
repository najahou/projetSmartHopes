<?php

require('dao.php');
require ('cnx.php');

class medicamentservice implements  dao{
    private $db;
    function __construct()
    {
        $c = new connexion();
        $this-> db = $c->getdb();
    }
    function add($medicament){
        $st = $this->db->prepare("insert into medicament(id_medic,contre_indication, effects, nom_medicament, reference,Quantite,pharmacie_id) values (?,?,?,?,?,?,?)");
        if($st->execute(array(

            $medicament->getIdMedic(),
            $medicament->getContreIndication(),
            $medicament->getEffects(),
            $medicament->getNomMedicament(),
            $medicament->getReference(),
            $medicament->getQuantite(),
            $medicament->getPharmacieId()
        ))){
            return true;

        }
        else{
            return false;
        }
    }

    function update($medicament)
    {
        // TODO: Implement update() method.
        try{


            $st = $this->db->prepare('UPDATE medicament SET contre_indication = ?,effects = ?,nom_medicament = ?,reference = ?,Quantite=?,pharmacie_id = ? WHERE id_medic = ?');
            $st->execute(array(
                $medicament->getContreIndication(),
                $medicament->getEffects(),
                $medicament->getNomMedicament(),
                $medicament->getReference(),
                $medicament->getQuantite(),
                $medicament->getPharmacieId(),
                $medicament->getIdMedic()


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
            $st = $this->db->prepare('delete from medicament where id_medic =?');
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

            $st = $this->db->prepare('SELECT * FROM medicament WHERE id_medic = ?');

            $st->execute([$id]);
            $row = $st->fetch();
            if($row != null) {
                $medicament = new medicament();
                $medicament = $medicament->construct0($row[0], $row[1], $row[2], $row[3],$row[4],$row[5],$row[6]);
                return $medicament;
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
        $req =$this->db->prepare("select * from medicament");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }

    function findcountrespo()
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT COUNT(*) FROM personne WHERE type_personne ='Responsable' ");

            $st->execute();
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

    function findcountpharmacie()
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT COUNT(*) FROM pharmacie");

            $st->execute();
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

    function findcountrappel()
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT COUNT(*) FROM rappel");

            $st->execute();
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

    function findcountbesoin()
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT COUNT(*) FROM demande where type_demande='besoin'");

            $st->execute();
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
    function findcountmedicament()
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT COUNT(*) FROM medicament");

            $st->execute();
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
    function findcountpatient()
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT COUNT(*) FROM personne WHERE type_personne ='patient' ");

            $st->execute();
            $row = $st->fetch();
            if($row != null) {

                return $row;
            }
            return null;

        }
        catch(PDOException $e) {
            echo 'Error :' .$e->getMessage();
        }
    }function findpatient()
{
    // TODO: Implement findbyid() method.
    try {

        $st = $this->db->prepare("SELECT * FROM personne WHERE type_personne ='patient' LIMIT 5");

        $st->execute();
        $row = $st->fetchAll();
        if($row != null) {

            return $row;
        }
        return null;

    }
    catch(PDOException $e) {
        echo 'Error :' .$e->getMessage();
    }
}

}
?>
