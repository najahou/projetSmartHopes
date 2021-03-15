<?php
require('../../Service/rappel_service.php');
require ('../../Metier/rappel.class.php');
$medicaments = new rappel_service();
if($medicaments->delete($_GET["id"])){
    header("Location: listerappel.php");
}

?>
