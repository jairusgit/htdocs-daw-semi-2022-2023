<form enctype="multipart/form-data" action="index.php" method="POST">
    <input type="file" name="archivo"/>
    <input type="submit" value="Subir archivo" name="subir"/>
</form>

<?php
    //Si ha pulsado el botón de subir
    if (isset($_POST['subir'])){
        $archivo_recibido = $_FILES['archivo'];
        $directorio_subida = "C:\\xampp\\htdocs\\formularios\\files\\";
        $ruta_archivo = $directorio_subida.basename($archivo_recibido['name']);

        //Si se ha subido el archivo temporal y lo he podido mover a la ruta definitiva
        if (is_uploaded_file($archivo_recibido['tmp_name']) && move_uploaded_file($archivo_recibido['tmp_name'],$ruta_archivo)){
            echo "El archivo se ha subido";
        }
        else{
            echo "Ha habido un error";
        }
    }

