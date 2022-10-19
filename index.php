<strong>Hola</strong>
<?php echo "Jairo"; ?>
<br>
<?php
    //Comentario de una línea
    /*
     * Comentario multilínea
     */
    //Si escribo todo entiende que es algo por hacer
    $nombre = "Jairo";
    $numero = 7;
    echo "Mi nombre es ".$nombre." y mi número es ".$numero;
?>
<p>
    Mi nombre es <?php echo $nombre ?> y mi número es <?php echo $numero ?>
</p>
<?php

    $array = array(2,5,7);
    var_dump($array);
    echo "<br><br>";

    $array2 = [6,7,8];
    var_dump($array2);
    echo "<br><br>";

    $arrayMixto = [
            7 => "pepe",
            3 => 1,
            "apellido" => "garcía",
            "permisos" => false,
            "propiedades" => [3 ,7, 5]
    ];
    var_dump($arrayMixto);
    echo "<br><br>";

    //Si solo asigno un índice numérico al primero, el resto de índices son consecutivos a ese
    $diasSemana = [1 => "L","M","X","J","V","S","D"];
    var_dump($diasSemana);
    echo "<br><br>";

    //Generar un array con números del 0 al 100
    $numeros = [];
    for ($i = 100; $i > 0; $i--) $numeros[$i] = $i;
    var_dump($numeros);
    echo "<br><br>";

    //Array de nombres y apellidos
    $personas = [
            ['nombre' => 'Sara', 'apellido' => 'Sanzano'],
            ['nombre' => 'María José', 'apellido' => 'De Juan']
    ];
    var_dump($personas);
    echo "<br><br>";

    foreach ($personas as $indice => $persona){
        echo "Índice: ".$indice."<br>";
        echo "Nombre: ".$persona['nombre']."<br>";
        echo "Apellido: ".$persona['apellido']."<br>";
    }

?>
