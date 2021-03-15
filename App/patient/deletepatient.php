<?php
require('../../Service/patientservice.php');
require ('../../Metier/patient.php');
$patients = new patientservice();
if($patients->delete($_GET["id"])){
    header("Location: listepatient.php");
}

?>
