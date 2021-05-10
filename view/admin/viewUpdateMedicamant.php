<div class="container p-2 my-5  bg-light">

<form method="POST" class="mt-4 p-5" action="index.php?controller=medicament&action=updated" >
<div class="form-group">
    <label for="exampleInputEmail1">Nom de medicamant</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description de medicamant</label>
    <input type="text" name="description"  class="form-control" id="exampleInputPassword1">
  </div>


  <div class="form-group">
    <label for="exampleInputLien">Prix de medicamant</label>
    <input type="text" name="prix"  class="form-control" id="exampleInputLien">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>