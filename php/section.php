<?php
if ($_GET['accion'] == 'login') echo '<section id="login">';
else echo '<section>';

if ($_GET['accion'] == 'login') echo 'login';
else if ($_GET['accion'] == 'perfil') echo 'perfil';
else if ($_GET['accion'] == 'error') header("Location: /");

echo '</section>';
?>