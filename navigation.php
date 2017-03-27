<footer class="nfoot">
  <ul class="navigation">
    <?php
       $key >= 0;
      if($key < count($result) -1)
        {
          $new_key = $key + 1;
          echo '<li><a href="index2.php?article=' . $result[$new_key] .'">Précedent</a></li>';
        }
    ?>
      
    <?php
      if($key > 0)
        {
          $new_key = $key - 1;
          echo '<li><a href="index2.php?article=' . $result[$new_key] .'">Suivant</a></li>';
        }
     ?>
  </ul>
</footer>
