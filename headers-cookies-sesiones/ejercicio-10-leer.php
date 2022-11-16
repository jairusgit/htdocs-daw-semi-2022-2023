<?php
session_start();
if (!isset($_SESSION['nombre'])){
?>
<p>La variable nombre no existe</p>
<?php } else { ?>
    <p>La variable nombre tiene el valor <?php echo $_SESSION['nombre'] ?></p>
<?php } ?>
