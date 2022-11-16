<?php
echo "\x2a"; //muestra un asterisco utilizando notación hexadecimal

$quien = "Jairo";
echo "Hola $quien\n"; //muestra Hola Jairo y cambia de línea
echo 'Hola $quien\n'; //muestra Hola Jairo\n

echo 'Mi nombre es \'Jairo\'.'; //Muestra Mi nombre es 'Jairo'.
$quien = "Jairo";
echo "El valor de la variable \$quien es \"$quien\"."; //Muestra El valor de la variable $quien es "Jairo".

echo strlen("Jairo"); //devuelve 5
echo strlen("Jairo García"); //devuelve 13
echo mb_strlen("Jairo García",'utf-8'); //devuelve 12

echo mb_strpos('camión','n',0,'utf-8')."<br>";

$numero = 10000/3;
echo number_format($numero,2,',','')."€";
