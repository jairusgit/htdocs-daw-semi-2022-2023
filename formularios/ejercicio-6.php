<h1>Ejercicio 6</h1>
<p>Genera un formulario de subida de ficheros que solo acepte imágenes (mediante MIME) y además las almacene en una
    carpeta del proyecto utilizando como nombre imagen-12345, imagen-24232, imagen-54532, etc.
</p>
<hr>
<form enctype="multipart/form-data" method="POST">
    <input type="file" name="imagen" accept="image/*"/>
    <input type="submit" value="Subir archivo" name="subir"/>
</form>
<?php
    //Si ha pulsado el botón de subir
    if (isset($_POST['subir'])){
        //Obtengo el tipo de archivo
        $tipo = $_FILES['imagen']['type'];

        //Si el archivo es una imagen
        if (substr($tipo,0,5) == 'image'){

            $archivo_recibido = $_FILES['imagen'];
            $directorio_subida = "C:\\xampp\\htdocs\\formularios\\files\\";
            //Nombre del fichero debe ser imagen-aleatorio de 5 dígitos
            $nombre = 'imagen-'.random_int(10000,99999);
            //Extensión original del fichero
            $extension = pathinfo($archivo_recibido['name'],PATHINFO_EXTENSION);
            //Ruta completa del fichero
            $ruta_archivo = $directorio_subida.$nombre.".".$extension;
            //Si se ha subido el archivo temporal y lo he podido mover a la ruta definitiva
            if (is_uploaded_file($archivo_recibido['tmp_name']) && move_uploaded_file($archivo_recibido['tmp_name'],$ruta_archivo)){
                echo "El archivo se ha subido";
            }
            else{
                echo "Ha habido un error";
            }
        }
        else{
            echo "No es una imagen";
        }


    }

