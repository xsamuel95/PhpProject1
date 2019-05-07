<?php
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$loginbdd = mysqli_connect('localhost', 'melvin', 'adminadmin','blog');
$delete ='DELETE  from Article WHERE id='.$id;
$req = mysqli_query($loginbdd, $delete);
 echo mysqli_error($loginbdd);
 header('Refresh:0; url="listarticle.php"');
?>
