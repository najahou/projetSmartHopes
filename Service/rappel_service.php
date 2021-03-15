    <?php
    
require('daoRappel.php');
require ('cnx.php');
class rappel_service implements daoRappel
{
    private $db;
    function __construct()
    {
        $c = new connexion();
        $this-> db = $c->getdb();
    }
    //ajout
    function add($rappel)
    {
        $st = $this->db->prepare("insert into rappel(heur,nb_fois,medicament_id,patient_id) values (?,?,?,?)");
        if($st->execute(array(
            $rappel->getHeur(),
            $rappel->getNbFois(),
            $rappel->getMedicamentId(),
             $rappel->getPatientId()

        ))){
            return true;

        }
        else{
            return false;
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
    function findallrappel()
    {
        $req =$this->db->prepare("select * from rappel");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }
    function findall1()
    {
        $req =$this->db->prepare("select * from medicament");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }

    function findall2()
    {
        $req =$this->db->prepare("select * from personne");
        if($req->execute()){
            return $req ->fetchAll();
        }
        else{
            echo  "la liste est vide ";
        }
    }
    function delete($Id)
    {

        try{
            $st = $this->db->prepare('delete from rappel where id =?');
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

}
