<?php
require('../../Service/medicamentservice.php');
require ('../../Metier/medicament.php');
$medicaments = new medicamentservice();
if($medicaments->delete($_GET["id"])){
    header("Location: listemedicament.php");
}

?>
