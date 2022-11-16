<?php
/******************** FORMATOS DE FECHAS **********************************/

//Crear e imprimir la fecha actual
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
echo "<p>Formato 12h: " .$ahora->format("d-m-Y h:i:s"). "</p>";
echo "<p>Formato 24h: " .$ahora->format("d-m-Y H:i:s"). "</p>";

//Dar formato a una fecha europea (dd/mm/aaaa)
$fecha_europea = "27/10/2008";
$fecha = DateTime::createFromFormat("d/m/Y", $fecha_europea, new DateTimeZone("Europe/Madrid"));
echo "<p>Fecha: " .$fecha->format("d-m-Y H:i:s"). "</p>";

//Dar formato a una fecha americana (mm/dd/aaaa)
$fecha_americana = "10/27/2008";
$fecha = DateTime::createFromFormat("m/d/Y", $fecha_americana, new DateTimeZone("Europe/Madrid"));
echo "<p>Fecha: " .$fecha->format("d-m-Y H:i:s"). "</p>";

//Recoger una fecha de un DATETIME SQL (yyyy-mm-dd hh:ii:ss)
$fecha_from_sql = "2018-07-31 12:27:34";
$fecha = DateTime::createFromFormat("Y-m-d H:i:s", $fecha_from_sql, new DateTimeZone("Europe/Madrid"));
echo "<p>Fecha: " .$fecha->format("d-m-Y H:i:s"). "</p>";

//Preparar una fecha para un DATETIME SQL (yyyy-mm-dd hh:ii:ss)
$fecha_europea = "27/10/2008 12:36:57";
$fecha = DateTime::createFromFormat("d/m/Y H:i:s", $fecha_europea, new DateTimeZone("Europe/Madrid"));
echo "<p>Fecha: " .$fecha->format("Y-m-d H:i:s"). "</p>";

/*****************  AÑADIR O QUITAR TIEMPO A UNA FECHA *******************************/

//Añadir 1 día
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
$ahora->modify('+1 day');
echo "<p>Añadir 1 día: " .$ahora->format("d-m-Y H:i:s"). "</p>";

//Añadir 2 horas
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
$ahora->modify('+120 min');
echo "<p>Añadir 2 horas: " .$ahora->format("d-m-Y H:i:s"). "</p>";

//Quitar 10 años
$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));
$ahora->modify('-10 year');
echo "<p>Quitar 10 años: " .$ahora->format("d-m-Y H:i:s"). "</p>";

/******************* COMPARAR FECHAS CON FORMATOS DIFERENTES ****************************/

$ahora = new DateTime("now", new DateTimeZone("Europe/Madrid"));

$anterior = "2018-07-31 12:27:34";
$fecha_anterior = DateTime::createFromFormat("Y-m-d H:i:s", $anterior, new DateTimeZone("Europe/Madrid"));

$posterior = "10/27/2035 12:36:57";
$fecha_posterior = DateTime::createFromFormat("d/m/Y H:i:s", $posterior, new DateTimeZone("Europe/Madrid"));

$resultado = ($ahora > $fecha_anterior) ? "SI" : "NO";
echo "<p>¿Es el 31/07/2018 anterior a la fecha actual?: " .$resultado. "</p>";

$resultado = ($ahora < $fecha_posterior) ? "SI" : "NO";
echo "<p>¿Es el 27/10/2035 posterior a la fecha actual?: " .$resultado. "</p>";

$resultado = ($fecha_anterior < $fecha_posterior) ? "SI" : "NO";
echo "<p>¿Es el 27/10/2019 posterior al 31/07/2018?: " .$resultado. "</p>";

/* EJEMPLO INPUT DATE */
if (isset($_GET['guardar']) && $_GET['guardar'] == "Guardar"){
    $fecha = $_GET['fecha'];
    echo $fecha;
    $fechaFormato = DateTime::createFromFormat("Y-m-dTH:i", $fecha, new DateTimeZone("Europe/Madrid"));
    echo $fechaFormato->format('d/m/Y H:i');
}
?>

<form>
    Fecha: <input type="datetime-local" name="fecha">
    <input type="submit" name="guardar" value="Guardar">
</form>
