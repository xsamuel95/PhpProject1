<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <?php require "js/js.php"
        ?>
    </head>
    <body>
        <style>
            body{     background-image: url("coutile.jpg");
                         background-repeat:no-repeat;
  -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */
                      color: white;
                      text-align:center;
                      margin-top: 100px;
                      margin-bottom: 100px;
                      margin-right: 150px;
                      margin-left: 80px;     }
            .return{
                position:relative;
left:50%;
}
        
            
            
            </style>
        <form method="post" action="inscri.php"
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="pseudo" aria-describedby="emailHelp" placeholder="Entrer une email">
    <small id="emailHelp" class="form-text text-muted">Entrer une email valide!! Interdiction au supporter de Madrid !! </small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mots de passe</label>
    <input type="password" name="passe"class="form-control" id="exampleInputPassword1" placeholder="Mots de passe">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">M'enregistrer</label>
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>
    </form>
    
    
    <div class="return">
        <a href="paged.php">Retour ecran d'acceuil</a>
    </div>