<?php
session_start();
if (isset($_GET['guardar']) && $_GET['guardar'] == "Guardar"){
    $_SESSION['nombre'] = filter_input(INPUT_GET,'nombre',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

if (!isset($_SESSION['nombre'])){
?>
    <form>
        <label>Introduce tu nombre: </label>
        <input type="text" name="nombre">
        <input type="submit" name="guardar" value="Guardar">
    </form>
<?php } else { ?>
    <p>Pulsa <a href="ejercicio-10-leer.php">AQUÍ</a> para abrir la página de leer</p>
<?php } ?>
