<div class="container">

    <div class="row">
    <div class="col-9">
    <h1 class="lead display-4">Gestion de medicament</h1>
    </div>
    
    <div class="col-3">
    <a class="btn btn-primary mt-4" href="index.php?controller=admin&action=createmedicamant">Ajouter un medicament </a>
    </div>

    </div>



    <div class="row mt-5 mb-4">
    


    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_p as $c){
        $id = $c->getId();
       
        echo "<tr>";
        echo "<td>".$c->getId()."</td>"; 

        echo "<td>".$c->getNom()."</td>"; 
        echo "<td>".$c->getDescription()."</td>"; 
        echo "<td>" .$c->getPrix()." </td>"; 
     
        echo "
        <td> <a class='btn btn-outline-info' href='index.php?controller=admin&action=readmedicamant&id=$id'> Modifier </a> </td>
        <td> <a class='btn btn-outline-danger' href='index.php?controller=medicament&action=delete&id=$id'> Supprimer </a> </td>";


        echo "</tr>";
        
    }

    ?>




  </tbody>
</table>
 
    </div>


</div>


