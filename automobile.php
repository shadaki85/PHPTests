<?php
include "classe.php";

$automobile = new Automobile();


$automobile->ruotaAD->pressione="5";
$automobile->ruotaPD->pressione="4";
$automobile->ruotaAS->pressione="5";
$automobile->ruotaPS->pressione="2";

$automobile->nome = "Golf";

echo "La pressione degli pneumatici dell'auto '".$automobile->nome."' &egrave; : AS->".$automobile->ruotaAS->pressione." - AD->".$automobile->ruotaAD->pressione." - PS->".$automobile->ruotaPS->pressione." - PD->".$automobile->ruotaPD->pressione;

?>
