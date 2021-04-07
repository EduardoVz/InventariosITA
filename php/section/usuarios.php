<?php
$usuarios = $db->prepare('SELECT * FROM usuarios WHERE borrado = \'0\'');
$usuarios->execute([]);

echo '<table id="myTable">';
echo '<thead><tr><th> ID </th><th> Nombre </th><th></th></tr></thead>';
echo '<tbody>';

$idUltimo;

foreach($usuarios as $usuario) {
    echo '<tr>';
    echo '<td>' . htmlentities($usuario['id']) . '</td>';
    echo '<td> <input id="' . htmlentities($usuario['id']) . '" type="text" readonly value="' . htmlentities($usuario['usuario']) . '"/></td>';
    echo '<td>';
    echo '<span class="boton" id="editar-' . htmlentities($usuario['id']). '" style="display: inline-block;" onclick="editar(\''. htmlentities($usuario['id']) .'\')">Editar</span>';
    echo '<a class="boton" id="actualizar-' . htmlentities($usuario['id']). '" style="display: none" href="/procesar/'.htmlentities($usuario['id']).'/">Actualizar</a>';
    echo '<span class="boton" style="display: inline-block; background-color: red">Borrar</span>';
    echo '</td>';
    echo '</tr>';
    $idUltimo = $usuario['id'];
}

echo '</tbody>';
echo '</table>';
echo '<script>function editar(id) { for(var i = 1; i <= '.$idUltimo.'; i++) $(\'#\'+i).attr("readonly", true),$(\'#editar-\'+i).css("display", "inline-block"),$(\'#actualizar-\'+i).css("display", "none"); $(\'#\'+id).attr("readonly", false); $(\'#editar-\'+id).css("display", "none"); $(\'#actualizar-\'+id).css("display", "inline-block"); }</script>';
?>