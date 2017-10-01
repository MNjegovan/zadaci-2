<?php
/**
 * zadana je lista:
 * $lista = array(15,4,87,101,51,25,98,11,44,41);
 * potrebno je prebrojati koliko kvadrata tih brojeva je djeljivo sa 3
 */
$lista = array(15,4,87,101,51,25,98,11,44,41);
$brojalica = 0;
for ($i = 0;$i==9;$i++)
{
    if(($lista[$i]**2)%3==0)
    {
        $brojalica++;
    }
}