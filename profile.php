<?php

$loginbdd = mysqli_connect('localhost','melvin','adminadmin','blog');
$listuser = mysqli_query($loginbdd, 'SELECT * FROM `user` ORDER BY id desc');
$fetch = mysqli_fetch_all($listuser,MYSQLI_ASSOC);
?>
<?php
$listuser = mysqli_query($loginbdd, 'SELECT * FROM user ORDER BY id desc');
$fetch = mysqli_fetch_all($listuser,MYSQLI_ASSOC);
?>
<?php include 'navbar.php'; 
require "js/js.php"
        ?>
    <div class="card-header" id="head">
      <h2 class="mb-0">
          <button class="btn btn-link">
            Gestion des utilisateurs
          </button>
      </h2>
    </div>
<?php 
$i=1;
foreach ($fetch as $user){ ?>
<?php echo'<div class="accordion" id="accordionExample'.$i.'">'; ?>
  <div class="card">
    <?php echo'<div class="card-header" id="heading'.$i.'">'; ?>
      <h2 class="mb-0">
        <?php echo'<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapseOne">'; ?>
          <p><?=$user['login'];?> / id numéro <?=$user['id'];?></p>
        </button>
        <a class="del" href="deleteuser.php?id=<?=$user['id'];?>">Supprimer</a>
      </h2>
    </div>
  </div>
</div>
<?php $i++; } ?>
    <style>
        body::after{
            content: "";
  background: url("brazil.jpeg");
  background-repeat:no-repeat;
  -webkit-background-size: cover; /* pour anciens Chrome et Safari /
  background-size: cover;/ version standardisée */
  opacity: 0.8;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;
}

        .del{
            text-align: right;
            margin: auto;
            font-size: medium;
        }
    </style>

