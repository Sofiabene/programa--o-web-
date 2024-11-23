<?php
$globalvar = 15;
function contaMaisUm() {
global $globalvar;
$globalvar++;
echo "Globalbar é $globalvar";
}
contaMaisUm();
?>
