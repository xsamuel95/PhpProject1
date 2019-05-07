<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <?php require "js/js.php"
        ?>
        <title>Blog</title>
    </head>
    <body>
        <?php if(empty($_SESSION['login'])){ ?>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark";">
  <a class="navbar-brand" href="#">COUTIBLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active"  href="inscription.php">S'inscrire</a><span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link"  href="identi.php">Se connecter</a>
  </nav>
</div>
        <?php }else{ ?>
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">COUTIBLOG</a>
  <li class="nav-item dropdown">
   <?php   if($_SESSION['admin']==1){ ?>
    <div class="navbar-nav">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Option Administrateur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item"  href="profile.php">Gerer utilisateur</a>
          <a class="dropdown-item"  href="listarticle.php">Voir les articles</a>
          <a class="dropdown-item"  href="article.php">Creer un article</a>
        </div>
        <li class="nav-item">
         <a class="nav-item nav-link" href="deco.php">Se deconnecter</a>
    </div>
      <?php }elseif($_SESSION['admin']==0){ ?>
      <div class="navbar-nav">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Option Visiteur
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item"  href="voirarticle.php">Voir les articles</a>
          <a class="dropdown-item"  href="article2.php">Creer un article</a>
        </div>
          <li class="nav-item">
         <a class="nav-item nav-link" href="deco.php">Se deconnecter</a>
    </div>
      <?php } ?>
      </li>
      
      </li>
                    <?=$_SESSION['login']?>
      </nav>
            <?php } ?>
        <style>
             body::after{
            content: "";
  background: url("coutibabe.jpg");
  background-repeat:no-repeat;
  -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover;/* version standardisée */
  opacity: 0.6;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: fixed;
  z-index: -1;   
  text-align: center;
}
            h1{
              text-align: center;
              margin: auto;
              color: #DC143C;
            }
            h2{
                text-align: center;
                    margin: auto;
                    color: black;
            }
            h3{
                text-align: center;
                margin: auto;
                font-size: small;
                color: red;
            }
            table{
                text-align: center;
                margin: auto;
                color: black;
            }
            .card{
                text-align: center;
                margin: auto;
                color: black;
            }
            
            
        </style>
        <h1> Page d'accueil</h1>
        <br><br><br>
    <h2>Premier blog à l'honneur de CoutiBabe</h2>
 
    <h3>Blog conçu pour ajouter ses joueurs préféré ayant jouer au barca en leurs rajoutantant une petite description<br>Bonne Lecture<br>Visca Barca</h3>
      <br><br><br>
            <?php
            $loginbdd = mysqli_connect('localhost','melvin','adminadmin','blog');
$listarticle = mysqli_query($loginbdd, 'SELECT * FROM `Article` ORDER BY id desc');
$fetch = mysqli_fetch_all($listarticle,MYSQLI_ASSOC);
$i=0;      
            foreach($fetch as $article) {
    if ($i++ < 3) { ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?=$article['titre'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$article['auteur'];?></h6>
                <p class="card-text"><?=$article['contenu'];?></p>
            </div>
        </div><br>
    <?php }
            }
    ?>

    </body>
    </html>
