<?php
require('../../Service/chambreservice.php');
require ('../../Metier/chambre.php');
$chambres = new chambreservice();
if($chambres->delete($_GET["id"])){
    header("Location: listechambre.php");
}
?>
