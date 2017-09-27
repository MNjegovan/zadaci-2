<?php
/**
 * zadana je lista:
 * $lista = array(1,2,3,4,5,6,7,8,9,10);
 * potrebno je izvaditi svaki parni član, staviti ga u odvojenu listu "parna" te ispisati obje liste
 */
$lista = array(1,2,3,4,5,6,7,8,9,10);
$parna = array();
for ($i = 0;$i < 10;$i++)
{
    if ($lista[$i]%2==0)
    {
        $parna = $lista[$i];
        unset($lista[$i]);
    }
}
foreach($lista as $indeks)
{
    echo $indeks . " ";
}
foreach($parna as $indeksa)
{
    echo $indeksa . " ";
}