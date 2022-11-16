<h1>Ejercicio 9</h1>
<?php
    //Borrar cookie
    if (isset($_GET['borrar']) && $_GET['borrar'] == "Borrar cookie"){
        setcookie('micookie','',-1);
        header("Location:ejercicio-9.php");
    }

    //Si no está seteada
    if (!isset($_COOKIE['micookie'])){
        //La genero
        setcookie('micookie','Hola, soy tu cookie amiga por 1 día',time() + 24 * 60 * 60);
?>
    <p>Cookie generada. Pulsa <a href="ejercicio-9.php">AQUÍ</a> para recargara la página</p>
<?php } else { ?>
    <p>La cookie ya existe. Pulsa el botón para borrarla.</p>
    <form>
        <input type="submit" name="borrar" value="Borrar cookie">
    </form>
<?php } ?>