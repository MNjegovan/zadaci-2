<?php
/**
 * zadana je lista brojeva:
 * $lista = array(1,2,3,4,5,6,7,8,9,10);
 * potrebno je svaki član liste kvadrirati te ispisati listu
 */
$lista = array(1,2,3,4,5,6,7,8,9,10);
for($i = 0;$i < 10;$i++)
{
    $lista[$i] = $lista[$i]**2;
    echo $lista[$i] . " ";
}