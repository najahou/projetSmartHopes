<?php
require('dao.php');
require ('cnx.php');

/**
 *
 */
class pharmacieService implements dao
{

    private $db;
    function __construct()
    {
        $c = new connexion();
        $this-> db = $c->getdb();
    }
    function add($pharmacie){
        $st = $this->db->prepare("insert into pharmacie(code_pharmacie, email, location, nompharmacie, telephone) values (?,?,?,?,?)");
        if($st->execute(array(

            $pharmacie->getCodePharmacie(),
            $pharmacie->getEmail(),
            $pharmacie->getLocation(),
            $pharmacie->getNompharmacie(),
            $pharmacie->getTelephone()
            ))){
            return true;

        }
        else{
            return false;
        }
    }

    function update($pharmacie)
    {
        // TODO: Implement update() method.
        try{


            $st = $this->db->prepare('UPDATE pharmacie SET email = ?,location = ?,nompharmacie = ?,telephone = ? WHERE code_pharmacie = ?');
            $st->execute(array($pharmacie->getEmail(), $pharmacie->getLocation(),
                $pharmacie->getNompharmacie(),$pharmacie->getTelephone(),$pharmacie->getCodePharmacie()));
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
            $st = $this->db->prepare('delete from pharmacie where code_pharmacie =?');
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

            $st = $this->db->prepare('SELECT * FROM pharmacie WHERE code_pharmacie = ?');

            $st->execute([$id]);
            $row = $st->fetch();
            if($row != null) {
                $pharmacie = new Pharmacie();
                $pharmacie = $pharmacie->Construct1($row[0], $row[1], $row[2], $row[3],$row[4]);
                return $pharmacie;
            }
            return null;

        }
        catch(PDOException $e) {
            echo 'Error :' .$e->getMessage();
        }
    }



    function findall()
    {
        $req =$this->db->prepare("select * from pharmacie");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }


}

?>