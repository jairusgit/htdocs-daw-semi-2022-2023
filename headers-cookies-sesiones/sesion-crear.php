<?php
//Para trabajar con sesiones
session_start();

//Guardar un dato en sesión
$_SESSION['numero'] = 27;

//Leer de la sesión
echo $_SESSION['numero'];
