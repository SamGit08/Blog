<?php
  $titre = $_POST['date'];  // « name="titre », prend le contenue du titre.
  $nom_file = $titre . '.php'; // ajoute au titre un .php
  $texte = $_POST['art'];  // prend le contenue du contenue.
  if (isset($_POST['date'])) // Si il y a du contenue dans le formulaire alors on créer le fichier.
  {
  $f = fopen("localhost/Blog/Articles/$nom_file", "x+"); // Permet d’ouvrir et de créer le fichier, le x+ permet de lire et écrire dans le fichier.
  fputs($f, $texte); // écris le titre + le nom du fichier
  fclose($f); // ferme le fichier
  }
 ?>
