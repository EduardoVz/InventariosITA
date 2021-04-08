<?php
$resguardantes = $db->prepare('SELECT * FROM resguardantes WHERE borrado = \'0\'');
$resguardantes->execute([]);

echo '<table>';
echo '<thead><tr><th> ID </th><th> Nombre </th><th></th></tr></thead>';
echo '<tbody>';

$idUltimo;

foreach($resguardantes as $resguardante) {
    echo '<tr>';
    echo '<td>' . htmlentities($resguardante['id']) . '</td>';
    echo '<td> <input id="' . htmlentities($resguardante['id']) . '" type="text" readonly value="' . htmlentities($resguardante['nombre']) . '"/></td>';
    echo '<td>';
    echo '<span class="boton" id="editar-' . htmlentities($resguardante['id']). '" style="display: inline-block;" onclick="editar(\''. htmlentities($resguardante['id']) .'\')">Editar</span>';
    echo '<a class="boton" id="actualizar-' . htmlentities($resguardante['id']). '" style="display: none" href="/procesar/'.htmlentities($resguardante['id']).'/">Actualizar</a>';
    echo '<span class="boton" style="display: inline-block; background-color: red">Borrar</span>';
    echo '</td>';
    echo '</tr>';
    $idUltimo = $resguardante['id'];
}

echo '</tbody>';
echo '</table>';
echo '<script>function editar(id) { for(var i = 1; i <= '.$idUltimo.'; i++) $(\'#\'+i).attr("readonly", true),$(\'#editar-\'+i).css("display", "inline-block"),$(\'#actualizar-\'+i).css("display", "none"); $(\'#\'+id).attr("readonly", false); $(\'#editar-\'+id).css("display", "none"); $(\'#actualizar-\'+id).css("display", "inline-block"); }</script>';
?>