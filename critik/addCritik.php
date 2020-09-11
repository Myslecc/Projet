<?php
    include('menu.php');
?>
    
    <div class="container">
        <form action="./controller/ctrlAddCritik.php" method="POST">
            <div class="form-group">
                <label>Titre du film</label>
                <input name="titleFilm" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Titre de la critique</label>
                <input name="titleCritik" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Critique</label>
                <textarea name="text" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block">Ajouter</button>
        </form>
    </div>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Cherche un Film
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chercher un Film</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!-- Avec un bouton à droite -->
<div class="row">
  <div class="col-lg-6">
     <div class="input-group">
        <input id="inpt" name="inpt" type="text" class="form-control" placeholder="Rechercher un Film">
        <span class="input-group-btn">
           <button id="btnSearch" class="btn btn-success" type="submit">Go</button>
        </span>
     </div>
  </div>

</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Femer</button>
        <button type="button" class="btn btn-primary">Valider</button>
      </div>
    </div>
  </div>
</div> 
    
<script>

    $("#btnSearch").click(function(){
        var str = $("#inpt").val();
     
            $.ajax({
                url : 'https://api.betaseries.com/movies/search?key=b26e9beca2ea&title='+str, // La ressource ciblée
                type : 'GET', // Le type de la requête HTTP.
                data : 'inpt',

                





                
        });
        
 });
 


    
</script>

</body>
</html>