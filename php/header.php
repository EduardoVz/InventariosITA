<?php
if ($_SERVER['REQUEST_URI'] != '/') {
    echo '<header>';
    echo '<nav>';
    echo '<ul>';
    echo '<a href="/salir/"><li>Salir</li></a>';
    echo '<a href="/perfil/"><li>'.$_SESSION['usuario'].'</li></a>';
    echo '</ul>';
    echo '</nav>';
    echo '</header>';
}
?>