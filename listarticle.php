<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$loginbdd = mysqli_connect('localhost','melvin','adminadmin','blog');
$listarticle = mysqli_query($loginbdd, 'SELECT * FROM `Article` ORDER BY id desc');
$fetch = mysqli_fetch_all($listarticle,MYSQLI_ASSOC);
$i=1;
include 'navbar.php';
require "js/js.php"
?>
    <div class="card-header" id="head">
      <h2 class="mb-0">
          <button class="btn btn-link">
            Gestion des articles
          </button>
      </h2>
    </div>
<?php foreach ($fetch as $article){ ?>
<?php echo'<div class="accordion" id="accordionExample'.$i.'">'; ?>
  <div class="card">
    <?php echo'<div class="card-header" id="heading'.$i.'">'; ?>
      <h2 class="mb-0">
        <?php echo'<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse'.$i.'" aria-expanded="true" aria-controls="collapseOne">'; ?>
            <p><?=$article['titre'];?> par <?=$article['auteur'];?></p>
        </button>
      </h2>
    </div>

    <?php echo'<div id="collapse'.$i.'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample'.$i.'">'; ?>
      <div class="card-body">
          <p><?=$article['contenu'];?> <a href="deletearticle.php?id=<?=$article['id'];?>">Supprimer</a></p>
      </div>
    </div>
  </div>
</div>
<?php $i++; } ?>