<?php session_start();

$loginbdd = mysqli_connect('localhost','melvin','adminadmin','blog');
$pseudo = filter_input(INPUT_POST,'pseudo',FILTER_SANITIZE_EMAIL);
$mdp1 = password_hash(filter_input(INPUT_POST,'passe',FILTER_SANITIZE_STRING),PASSWORD_DEFAULT);

$conne = mysqli_query($loginbdd, 'INSERT INTO user (login,pwd) VALUES("'.$pseudo.'","'.$mdp1.'")');
header('Refresh:0; url="paged.php"');
?>

        



        
    



