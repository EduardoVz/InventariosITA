<?php
$post = $db->prepare('SELECT * FROM areasdetrabajo');
$post->execute([]);
echo '<table id="myTable"> ';

 	echo '
     <thead>
       	<tr>
         <th> ID </th><th> Nombre </th><th> Borrado </th>
      </tr>
    </thead>
    <tbody>';

foreach($post as $posta){
    echo '
    <tr>
    <td align="right">' . htmlentities($posta['id']) . '</td>
    <td>' . htmlentities($posta['nombre']) . '</td>
    <td>' . htmlentities($posta['borrado']) . '</td>
 </tr>';
}
     
    echo '</tbody> 
      </table>';
    
?>