<?php
session_start();

    $resetear = filter_input(INPUT_GET,'resetear',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //Si quiero resetear la sesión
    if ($resetear == 'resetear'){
        //Borro el array completo
        unset($_SESSION['perros']);
    }

    //Si todavía no he definido el array de perros en la sesión
    if (!isset($_SESSION['perros'])){

        $_SESSION['perros'] = [
            ['nombre' => 'Curro', 'dueno' => 'Jairo', 'edad' => 12, 'raza' => 'Chucho', 'imagen' => 'perro1.jpg'],
            ['nombre' => 'Toby', 'dueno' => 'Sara', 'edad' => 3, 'raza' => 'Pastor alemán', 'imagen' => 'perro2.jpg'],
            ['nombre' => 'Zasca', 'dueno' => 'María José', 'edad' => 7, 'raza' => 'Foxterrier', 'imagen' => 'perro3.jpg'],
        ];
    }

    $borrar = filter_input(INPUT_GET,'borrar',FILTER_SANITIZE_NUMBER_INT);
    //Si quiere borrar
    if ($borrar !== ""){
        //Borro el elemento del array
        unset($_SESSION['perros'][$borrar]);
    }

    $orden = filter_input(INPUT_GET,'orden',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $direccion = filter_input(INPUT_GET,'direccion',FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    //Si quiere ordenar
    if ($orden && $direccion){
        //Decido si es ascendente o descendente
        $dir = $direccion == "ascendente" ? SORT_ASC : SORT_DESC;
        //Ordeno por el campo que me han pasado
        foreach ($_SESSION['perros'] as $key => $row){
            $array_orden[$key] = $row[$orden]; //Obtengo array del valor a ordenar con los índices originales
        }
        array_multisort($array_orden, $dir, $_SESSION['perros']);
    }

?>


<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Ejemplo Listado</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h1>Listado de personajes</h1>
        <a href="index.php?resetear=resetear">Resetear la sesión</a>
    </header>
    <ul class="titulo">
        <li>Imagen</li>
        <li>Nombre
            <a href="index.php?orden=nombre&direccion=ascendente">A</a>
            <a href="index.php?orden=nombre&direccion=descendente">D</a>
        </li>
        <li>Dueño
            <a href="index.php?orden=dueno&direccion=ascendente">A</a>
            <a href="index.php?orden=dueno&direccion=descendente">D</a>
        </li>
        <li>Edad</li>
        <li>Raza</li>
        <li>Acciones</li>
    </ul>
    <?php foreach ($_SESSION['perros'] as $key => $row){ ?>
        <ul>
            <li><img src="img/<?php echo $row['imagen'] ?>" alt="<?php echo $row['nombre'] ?>"></li>
            <li><?php echo $row['nombre'] ?></li>
            <li><?php echo $row['dueno'] ?></li>
            <li><?php echo $row['edad'] ?></li>
            <li><?php echo $row['raza'] ?></li>
            <li>
                <a href="ver.php?key=<?php echo $key ?>">Ver</a>
                <a href="index.php?borrar=<?php echo $key ?>">Borrar</a>
            </li>
        </ul>
    <?php } ?>
</body>
</html>




<?php
