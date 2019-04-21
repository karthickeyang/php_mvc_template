<?php require 'partials/head.php'; ?>
    
 
   <ul>
   <?php
   foreach ( $users as $user) : ?>
      <li> <?= $user->name ?></li>
   <?php endforeach ?>   
   </ul>
    
<?php require 'partials/foot.php'; ?>