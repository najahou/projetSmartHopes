<?php
require('../../Service/pharmacieService.php');
require ('../../Metier/Pharmacie.php');
$Pharmacieservice = new pharmacieService();
if($Pharmacieservice->delete($_GET["id"])){
    header("Location: listepharmacie.php");
}

?>
