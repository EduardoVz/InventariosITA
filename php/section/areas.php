<?php
if ($_GET['accion'] == 'login') echo '<section id="login">';
else echo '<section>';

if ($_GET['accion'] == 'login') echo 'login';
else if ($_GET['accion'] == 'perfil') {
echo 'perfil';
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
    

}
else if ($_GET['accion'] == 'error') header("Location: /");

echo '</section>';
?>