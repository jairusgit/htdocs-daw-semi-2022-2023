<h3>
    Escribe una función que devuelva la letra o número siguiente al introducido
    (Ejemplo, si la muestra es 'a', debe devolver 'b'. Si la muestra es '4', debe devolver '5').
</h3>
<?php
//    $array = ['a','b','c','d','e',0,1,2];
//    $valor = 2;
//    $indice = array_search($valor,$array);
//
//    if ($indice === false){
//        echo "El valor no está en array";
//    }
//    else if ($indice + 1 < count($array)){
//        echo $array[++$indice];
//    }
//    else{
//        echo $array[0];
//    }
        $valor = 'Z';
        $ascii = ord($valor);
        echo $ascii;
        echo chr(++$ascii);


        //PATRONES
        $patron = "/ab[c-e]\d/"; //Tiene que empezar por una a, una b, una letra entre la c y la e y un digito
        $string = "abc7";
        if (preg_match($patron,$string) === 1){
            echo "El string cumple el patrón";
        }
        else{
            echo "El string NO cumple el patrón";
        }
?>
