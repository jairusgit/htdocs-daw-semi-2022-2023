<form>
    <input type="number" name="numero">
    <input type="submit" name="Enviar" value="Enviar">
</form>

<?php

if (isset($_GET['Enviar'])){
    echo filter_input(INPUT_GET,'numero',FILTER_SANITIZE_NUMBER_INT);
}
