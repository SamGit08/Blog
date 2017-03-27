<footer class="nfoot">
  <ul class="navigation">
    <?php
       $key >= 0;
      if($key < count($result) -1)
        {
          $new_key = $key + 1;
          echo '<li><a href="index3.php?cv=' . $result[$new_key] .'">Précedent</a></li>';
        }
    ?>
      <li><a href="index.php">Accueil</a></li>
    <?php
      if($key > 0)
        {
          $new_key = $key - 1;
          echo '<li><a href="index3.php?cv=' . $result[$new_key] .'">Suivant</a></li>';
        }
     ?>
  </ul>
</footer>
