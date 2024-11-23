<?php
function contaMaisUm() {
static $conta = 0;
$conta++;
echo $conta, "<br />";
}
contaMaisUm();
contaMaisUm();
contaMaisUm()
?>
