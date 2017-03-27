<h2>Le 7 Fevrier 2017</h2>
  <p class="caveat">Aujourd'hui nous avons vu comment lister le contenu d'un dossier avec la fonction Php "scandir"<br><br>
      Exemple:<br><br>
        <code>$lignes = scandir("articles");<br>
          //"scandir" liste les fichers dans le répertoire "articles"<br>

          foreach ($lignes as $ligne)
            {<br>
              echo "<\li>$ligne<\li>";
            }<br>
            //la fonction "foreach" va parcourir les fichiers et la commande "echo" va les ecrire par ligne.
          </code>
      </p>
<?php
  include 'navigation.php';
?>
