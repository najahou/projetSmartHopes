<?php
class  connexion {
    private $db;
    function __construct()
    {
        $username = "root";
        $password="";

        $dsname="mysql:host=localhost;dbname=maison";
        try{
            $this -> db = new PDO($dsname,$username,$password);
        }catch (PDOException $e){
            echo  "Error database ".$e->getMessage();
        }
    }
    function getdb(){
        return $this ->db;
    }

}
?>