<?php
if ($_POST['procesar'] == 'login') {
    $usuarios = $db->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena');
    $usuarios -> execute([':usuario' => $_POST['usuario'], ':contrasena' => $_POST['contrasena']]);
    if ($usuarios -> rowCount() > 0) {
        foreach($usuarios as $usuario) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['usuario'] = $usuario['usuario'];
            $_SESSION['contrasena'] = $usuario['contrasena'];
        }
        header('Location: /inventario/');
    } else {
        header('Location: /');
    }
}
?>