<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat+Brush|PT+Sans+Narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Laila" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <h1 id="titre">Articles</h1>
      <div class="contenu">
        <ul class="navigation">
          <?php
            $lignes = scandir("Articles", 1);
            $lignes2 = array(".","..");
            $result = array_diff($lignes, $lignes2);
            $key = array_search($_GET["article"], $result);
            foreach ($result as $ligne)
              {
                $rest = pathinfo($ligne);
                echo "<li><a href=\"index2.php?article=$ligne\">".$rest['filename']."</a></li>";
              }
          ?>
        </ul>
        <div class="containt" id="openmodal">
          <form class="modal" action="Formulaire.php" method="post">
            <label for="date">Date</label>
            <input type="text" name="date" value="" placeholder="aaaa-mm-dd">

            <label for="message">Article</label>
            <textarea name="art" type="text" placeholder="tapez article..."></textarea>

            <input id="submit" type="submit" name="" value="Creer">
          </form>
          <a href="#" id="fermer">Fermer</a>
        </div>
        <a href="#openmodal" id="modal">Nouvel article</a>
        <script type="text/javascript" src="script.js">
        </script>
        <?php
          $dossier = "Articles";
          $montrer = false;
          if(isset($_GET["article"]))
            {
              $article_path = "$dossier/".$_GET["article"];
              if(dirname(realpath($article_path)) == (realpath("./$dossier")))
                {
                  $montrer = true;
                  include ($article_path);
                }
            }
         ?>
    </div>
    <footer class="nfoot">
      <a href="index.php">Accueil</a>
    </footer>
  </body>
</html>
