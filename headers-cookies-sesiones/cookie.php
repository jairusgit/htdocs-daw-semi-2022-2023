<h1>Cookies</h1>
<?php
//Generar una cookie (nombre de la cookie, valor de la cookie, fecha de expiración)
setcookie('nombre','Jairo',time() + 24 * 60 * 60);
//Acceder al valor de una cookie
if (isset($_COOKIE['nombre'])) echo $_COOKIE['nombre'];
//Borrar cookie (fecha de expiración negativa)
//setcookie('nombre','',-1);
