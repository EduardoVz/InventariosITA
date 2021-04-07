<?php
echo '<form method="post" action="/procesar/">';
echo '<h1>Sistema de Inventarios</h1>';
echo '<input id="usuario" name="usuario" type="text" placeholder="Usuario" />';
echo '<input id="contrasena" name="contrasena" type="password" placeholder="Contraseña" />';
echo '<input name="procesar" type="text" style="display: none" value="login" />';
echo '<input id="login" type="submit" value="Iniciar sesión" />';
echo '</form>';
?>