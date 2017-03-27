
<header>
  <h1>Php</h1>
</header>
  <body>
        <p>Le 6 Février 2017<br>
            Aujourd'hui nous avons vu comment lister le contenu d'un dossier avec la fonction Php "scandir"<br><br>
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
  </body>
