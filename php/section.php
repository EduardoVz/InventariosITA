<?php
if ($_SERVER['REQUEST_URI'] == '/') echo '<section id="login">';
else echo '<section>';

if ($_SERVER['REQUEST_URI'] == '/') include 'php/section/login.php';
else if ($_GET['accion'] == 'inventario') include 'php/section/inventario.php';
else if ($_GET['accion'] == 'areas') include 'php/section/areas.php';
else if ($_GET['accion'] == 'resguardantes') include 'php/section/resguardantes.php';
else if ($_GET['accion'] == 'usuarios') include 'php/section/usuarios.php';
else if ($_GET['accion'] == 'historial') include 'php/section/historial.php';
else if ($_GET['accion'] == 'reportes') include 'php/section/reportes.php';
else if ($_GET['accion'] == 'perfil') include 'php/section/perfil.php';
else if ($_GET['accion'] == 'error') header("Location: /");
else header("Location: /");

echo '</section>';
?>