<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php require "js/js.php";
            include 'navbar.php'
        ?>
        <meta charset="UTF-8">
        <title>Page d'identification</title>
    </head>
    <body>
        <style>
            h1{ font-weight: 20% ;    
            }
            body{     background-image: url("coutibabe.jpg") ;
                       background-repeat:no-repeat;
                      color: white;
                      text-align:center;
                      margin-top: 100px;
                      margin-bottom: 100px;
                      margin-right: 150px;
                      margin-left: 80px;     }
            .transclass{ width:290px;
                        border:1px solid black;
                        transition:width 0.25s linear 0s,border 2s ease 0s; align-content: center; padding: 10px;            } 
            .transclass:hover{ width:300px;
                   border:1px solid red;
                   padding: 10px;                  } 
            button:hover{ width:100px;
                   border:1px solid black; transition:width 0.5s linear 0s,border 2s ease 0s; align-content: center; padding: 6px;             }          </style>            
            
            
            </style>
        <h1> Page d'identification </h1>
        <form method="POST" action="login.php">
            <form class="dropdown-menu p-4">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Email address</label>
    <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com" name="email">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Password</label>
    <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password" name="mdp">
  </div>
  <div class="form-group">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck2">
      <label class="form-check-label" for="dropdownCheck2">
        Remember me
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
                    <a href="paged.php">Retour ecran d'acceuil</a>

