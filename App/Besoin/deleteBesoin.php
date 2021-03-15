<?php
require('../../Service/BesoinService.php');
require('../../Metier/besoin.php');
session_start();
$besoins = new BesoinService();

if($besoins->delete($_GET["id"])){
    header("Location: listBesoin.php");
}
?>
