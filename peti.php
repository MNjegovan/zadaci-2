<?php
/**
 * zadana je lista:
 * $lista = array(17,65,74,65,5,61,32,100,31,74,40,10,5,69,67,15);
 * potrebno je ispisati svaki 5 član i svaki član dijeljiv sa 5
 */
$lista = array(17,65,74,65,5,61,32,100,31,74,40,10,5,69,67,15);
for ($i = 0;$i == 15;$i++)
{
    if (($lista[$i]%5==0) || (($i+1)%5==0))
    {
        echo $lista[$i]. " ";
    }

}
