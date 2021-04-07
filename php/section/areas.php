<?php
$areas = $db->prepare('SELECT * FROM areasdetrabajo WHERE borrado = \'0\'');
$areas->execute([]);

echo '<table id="myTable">';
echo '<thead><tr><th> ID </th><th> Nombre </th><th></th></tr></thead>';
echo '<tbody>';

$idUltimo;

foreach($areas as $area) {
    echo '<tr>';
    echo '<td>' . htmlentities($area['id']) . '</td>';
    echo '<td> <input id="' . htmlentities($area['id']) . '" type="text" readonly value="' . htmlentities($area['nombre']) . '"/></td>';
    echo '<td>';
    echo '<span class="boton" id="editar-' . htmlentities($area['id']). '" style="display: inline-block;" onclick="editar(\''. htmlentities($area['id']) .'\')">Editar</span>';
    echo '<a class="boton" id="actualizar-' . htmlentities($area['id']). '" style="display: none" href="/procesar/'.htmlentities($area['id']).'/">Actualizar</a>';
    echo '<span class="boton" style="display: inline-block; background-color: red">Borrar</span>';
    echo '</td>';
    echo '</tr>';
    $idUltimo = $area['id'];
}

echo '</tbody>';
echo '</table>';
echo '<script>function editar(id) { for(var i = 1; i <= '.$idUltimo.'; i++) $(\'#\'+i).attr("readonly", true),$(\'#editar-\'+i).css("display", "inline-block"),$(\'#actualizar-\'+i).css("display", "none"); $(\'#\'+id).attr("readonly", false); $(\'#editar-\'+id).css("display", "none"); $(\'#actualizar-\'+id).css("display", "inline-block"); }</script>';
?>