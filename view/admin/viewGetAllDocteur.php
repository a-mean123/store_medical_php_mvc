<div class="container">

    <div class="row">
    <div class="col-9">
    <h1 class="lead display-4">Gestion de docteur</h1>
    </div>
    
    <div class="col-3">
    <a class="btn btn-primary mt-4" href="index.php?controller=admin&action=createdocteur">Ajouter un Docteur </a>
    </div>

    </div>



    <div class="row mt-5 mb-4">
    


    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">specialite</th>

      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>

    
    <?php
    foreach ($tab_p as $c){
        $id = $c->getId();
       
        echo "<tr>";
        echo "<td>".$c->getId()."</td>"; 

        echo "<td>".$c->getName()."</td>"; 
        echo "<td>".$c->getSpecialite()."</td>"; 
       
     
        echo "
        <td> <a class='btn btn-outline-danger' href='index.php?controller=medicament&action=delete&id=$id'> Supprimer </a> </td>";


        echo "</tr>";
        
    }

    ?>




  </tbody>
</table>
 
    </div>


</div>


