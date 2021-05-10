<div class="container">

    <div class="row text-center">
    
        <h1 class="text-primary">Tout les Docteur</h1>
    
    </div>


<div class="row">



<?php

foreach($tab_u as $u){


    echo "
    
    <div class='card m-3' style='width: 18rem;'>
  <img src='https://santebd.org/wp-content/uploads/2018/12/Docteur.png' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>". $u->getName() ."</h5>
    <p class='card-text'>". $u->getSpecialite() ."</p>
   
  </div>
</div>
    
    
    
    ";




}



?>


</div>


</div>