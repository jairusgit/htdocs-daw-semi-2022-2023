<?php
session_start();
$key = filter_input(INPUT_GET,'key',FILTER_SANITIZE_NUMBER_INT);
print_r($_SESSION['perros'][$key]);
