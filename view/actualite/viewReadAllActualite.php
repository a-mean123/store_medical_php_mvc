<div class="container">


<div class="row text-center mt-5">
    
    <h1 class="text-primary">All Actualités</h1>

</div>


<div class="row">



<?php

foreach($tab_a as $u){


echo "
<div class='card col-3  m-4'>
  <div class='card-body'>
    <h5 class='card-title'>". $u->getTitre() ."</h5>
   
    <p class='card-text'>". $u->getText() ."</p>
    
  </div>
</div>


";




}



?>


</div>



</div>