<?php

include "classe.php";

$informazioniBase = new InformazioniBase();

$informazioniEstese = new InformazioniEstese();




echo "Informazioni base: <br /><br />" . $informazioniBase -> visualizza();
echo "<br />";
echo "Informazioni estese: <br /><br />" . $informazioniEstese -> visualizzaTutto();

?>
