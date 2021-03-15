<?php
require('dao.php');
require ('cnx.php');

class chambreservice implements dao{
    private $db;
    function __construct()
    {
        $c = new connexion();
        $this-> db = $c->getdb();
    }
    function add($chambre){
        $st = $this->db->prepare("insert into chambre(etage, nb_lit, num_chambre) values (?,?,?)");
        if($st->execute(array(
            $chambre->getEtage(),
            $chambre->getNbLit(),
            $chambre->getNumChambre()
        ))){
            return true;

        }
        else{
            return false;
        }
    }

    function update($chambre)
    {
        // TODO: Implement update() method.
        try{


            $st = $this->db->prepare('UPDATE chambre SET etage = ?,nb_lit = ?,num_chambre = ? WHERE id_ch = ?');
            $st->execute(array(
                $chambre->getEtage(),
                $chambre->getNbLit(),
                $chambre->getNumChambre(),

                $chambre->getIdCh()


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
            $st = $this->db->prepare('delete from chambre where id_ch =?');
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

            $st = $this->db->prepare('SELECT * FROM chambre WHERE id_ch = ?');

            $st->execute([$id]);
            $row = $st->fetch();
            if($row != null) {
                $chambre = new chambre();
                $chambre = $chambre->construct0($row[0], $row[1], $row[2], $row[3]);
                return $chambre;
            }
            return null;

        }
        catch(PDOException $e) {
            echo 'Error :' .$e->getMessage();
        }
    }



    function findall()
    {
        $req =$this->db->prepare("select * from chambre");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }

}

?>