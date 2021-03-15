<?php
require('dao1.php');
require ('cnx.php');
class service_admin implements dao1
{
    private $db;
    function __construct()
    {
        $c = new connexion();
        $this-> db = $c->getdb();
    }
    //ajout
    function add($admin)
    {
        var_dump($admin);
        $st = $this->db->prepare("insert into personne(nom,prenom,adresse,cin, sexe,telephone,password,actif,type_personne) value(?,?,?,?,?,?,?,?,?)");
        if($st->execute(array($admin->getNom(),$admin->getPrenom(),$admin->getAdresse(),$admin->getCin(),$admin->getSexe(),$admin->getTelephone(),$admin->getPassword(),$admin->getActif(),$admin->getType()))){
            return true;
        }else{
            return false;
        }

    }

    function login($cin,$password)
    {
        $st = $this->db->prepare("Select * from personne WHERE cin='$cin' and password='$password' ");
        $st->execute();

        if($st->rowCount() > 0){

                return true;
        }
         else{
             return false;
         }
    }
    function findrespo($cin)
    {
        // TODO: Implement findbyid() method.
        try {

            $st = $this->db->prepare("SELECT * FROM personne WHERE cin=?");

            $st->execute([$cin]);
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
}



?>