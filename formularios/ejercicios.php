<form>
    Empresa: <input type="text" name="empresa"/><br>
    Email: <input type="email" name="email"/><br>
    Clave: <input type="password" name="clave"/><br>
    <input type="submit" value="Acceder" name="acceder"/><br>
</form>

<?php
    //Si he pulsado el botón de submit
    if (isset($_GET['acceder'])){
        echo "Empresa: ".$_GET['empresa']."<br>";
        echo "Email: ".$_GET['email']."<br>";
        echo "Clave: ".$_GET['clave']."<br>";
    }
?>

<?php
    $url1 = 'http://localhost/formularios/ejercicios.php?empresa=M&m%27s&email=paco@paco.es&clave=Cig%C3%BCe%C3%B1a&acceder=Acceder';
    echo $url1."<br>";
    echo urldecode($url1)."<br>";
    $url2 = "http://localhost/formularios/ejercicios.php?empresa=M&m's&email=paco@paco.es&clave=Cigüeña&acceder=Acceder";
    echo $url2."<br>";
    echo urlencode($url2)."<br>";