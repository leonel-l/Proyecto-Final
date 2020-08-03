<?php
// Inicia Sesion
session_start();
 
$_SESSION = array();
 
// Destruye la sesion.
session_destroy();
 
// Redireccion a la pagina index
header("location: index.php");
exit;
?>