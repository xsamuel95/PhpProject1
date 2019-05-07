
<?php

/* @var $addarticle type */
$loginbdd = mysqli_connect('localhost', 'melvin', 'adminadmin','blog');
echo mysqli_connect_error();
$titrearticle = filter_input(INPUT_POST,'article_titre',FILTER_SANITIZE_STRING);
$contenu = filter_input(INPUT_POST,'article_contenu',FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST,'autor',FILTER_SANITIZE_STRING);

$connec = mysqli_query($loginbdd, 'INSERT INTO Article (auteur,titre,contenu,date) VALUES("'.$autor.'","'.$titrearticle.'","'.$contenu.'",NOW())');

echo mysqli_error($loginbdd);
?>
<?php require "js/js.php";
 include 'navbar2.php'
        ?>
<body>


   Article envoyer
   <br>
</body>
<style>
    body{
        background-image: url("campnou.jpg");
                background-repeat:no-repeat;
                background-repeat:no-repeat;
  -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */
                text-align: center;
    }
</style>

