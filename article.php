<html>
    <head>
    
        <script src="ckeditor/ckeditor.js"></script>
        <meta charset="UTF-8">
        <title>Page d'ajout artcile</title>
    </head><script src="ckeditor/ckeditor.js"></script>

    <body>
        <?php require "js/js.php";
            include 'navbar.php'
        ?>
        <div class="bod">
            <style>
                body{
                background-image: url("messi.jpg");
                background-repeat:no-repeat;
                background-repeat:no-repeat;
  -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */
                text-align: center;
                       
                }
                .bod{
                    margin-top: 100px;
                    margin-bottom: 100px;
                    margin-right: 150px;
                    margin-left: 80px; 
                }
                textarea        {
width:40% ;
height:50px;
margin:auto; /* exemple pour centrer */
display:block;/* pour effectivement centrer ! */
                }
            </style>
            <form method="POST" action="add.php">
                <input type="text" name="autor" placeholder="auteur"><br>          
      <input type="text" name="article_titre" placeholder="Titre" /><br />
      <textarea name="article_contenu" id="article_contenu"  placeholder="Contenu de l'article"></textarea><br />
      <input type="submit" value="Envoyer l'article" />

   </form>
            <script>
                CKEDITOR.replace('article_contenu');
                </script>
        </div>
    </body>

