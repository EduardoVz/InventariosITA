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
} else if ($_POST['procesar'] == 'borrar') {
    $result = $db->prepare('UPDATE '.$_POST['tabla'].' SET borrado=\'1\' WHERE id=\''.$_POST['id'].'\'');
    $result->execute([]);
    $result = $db->prepare('INSERT INTO `historial`(`descripcion`) VALUES ("Se elimino '.$_POST['nombre'].', de la tabla. '.$_POST['tabla'].' por '.$_SESSION['usuario'].'")');
    $result->execute([]);
    header('Location: /'.$_POST['tabla'].'/');
} else if ($_POST['procesar'] == 'actualizar') {
    $result = $db->prepare('UPDATE '.$_POST['tabla'].' SET nombre="'.$_POST['nombre'].'" WHERE id=\''.$_POST['id'].'\'');
    $result->execute([]);
    $result = $db->prepare('INSERT INTO `historial`(`descripcion`) VALUES ("Se modifico '.$_POST['nombre'].', de la tabla '.$_POST['tabla'].' por '.$_SESSION['usuario'].'")');
    $result->execute([]);
    header('Location: /'.$_POST['tabla'].'/');
} else if ($_POST['procesar'] == 'borrarinventario') {
    $result = $db->prepare('UPDATE '.$_POST['tabla'].' SET borrado=\'1\' WHERE id=\''.$_POST['id'].'\'');
    $result->execute([]);
    $result = $db->prepare('INSERT INTO `historial`(`descripcion`) VALUES ("Se elimino '.$_POST['descripcion'].', de la tabla. '.$_POST['tabla'].' por '.$_SESSION['usuario'].'")');
    $result->execute([]);
    header('Location: /'.$_POST['tabla'].'/');
} else if ($_POST['procesar'] == 'actualizarinventario') {
    $result = $db->prepare('UPDATE '.$_POST['tabla'].' SET `No SEP`="'.$_POST['nosep'].'", `No Inventario`="'.$_POST['noinventario'].'", `id_area`="'.$_POST['id_area'].'" , `id_resguardante`="'.$_POST['id_resguardante'].'", `Descripcion`="'.$_POST['descripcion'].'", `Marca`="'.$_POST['marca'].'", `Modelo`="'.$_POST['modelo'].'", `Serie`="'.$_POST['serie'].'", `Valor`="'.$_POST['valor'].'", `Fecha`="'.$_POST['fecha'].'" WHERE id=\''.$_POST['id'].'\'');
    $result->execute([]);
    $result = $db->prepare('INSERT INTO `historial`(`descripcion`) VALUES ("Se modifico '.$_POST['noinventario'].', de la tabla '.$_POST['tabla'].' por '.$_SESSION['usuario'].'")');
    $result->execute([]);
    header('Location: /'.$_POST['tabla'].'/');
}
?>