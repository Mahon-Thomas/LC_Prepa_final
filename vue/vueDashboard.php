<?php
if (!empty($_SESSION['userId']) ) {

?>
<section id="pageContent">
    <article>
        <h1> Annuaire des utilisateurs de Lc Prépa !</h1>

    <div class="table-responsive p-3">
    <table class="table table-sm">
     <tr>
        <th >#</th>
        <th ><h4 class="tbl_head_txt">Nom </h4></th>
        <th ><h4 class="tbl_head_txt"> Prénom </h4></th>
        <th ><h4 class="tbl_head_txt"> Date de naissance </h4></th>
            
        <th ><h4 class="tbl_head_txt"> Adresse email </h4></th>

      </tr>

        <?php
        
          
        
        
         
          
          foreach ($tblEmp as $client) {
            echo "<form action='index.php?action=Admin' method='POST'>";
            echo 
            "<tr>" 
                ."<td>"."<input readonly type='text' name='ide' id='ide' value=".$client['num']."></td>"
                ."<td>".$client['nom'] ."</td>"  
                ."<td>".$client['prenom'] ."</td>"
                ."<td>".$client['date_nais']."</td>"
                ."<td>".$client['email']."</td>"
                ."<td>". "<input class='btn btn-danger' type='submit' name='action' value='Supprimer'></td></tr>";
            echo "</form>";
          }

        ?>
      </table>
        </div>
        </article>

    <acticle>

    <h1> Commentaire des utilisateurs de Lc Prépa !</h1>
    <div class="table-responsive p-3">
    <table class="table table-sm">
     <tr>
        
        <th  class="tbl_head_txt">Auteur </th>
        <th  class="tbl_head_txt"> Sujet </th>
        <th  class="tbl_head_txt">Commentaire </th>
        <th class="tbl_head_txt">Date de publication</th>
        <th></th>

      </tr>

        <?php
        
          
        
        
         
          
          foreach ($tblcomment as $avis) {
            echo "<form action='index.php?action=Admin' method='POST'>";
            echo 
            "<tr>" 
                ."<td>"."<input readonly type='text' name='ide' id='ide' value=".$avis['num']."></td>"
                ."<td>".$avis['pseudo'] ."</td>" 
                ."<td>".$avis['sujet'] ."</td>"  
                ."<td coldspan='2'>".$avis['comment'] ."</td>"
                ."<td>".$avis['date_publi']."</td>"
                ."<td>". "<input class='btn btn-danger' type='submit' name='action' value='X'></td></tr>";
            echo "</form>";
          }

        ?>
      </table>
        </div>
    
    </action>
      <acticle>

    
    <div class="form-addprod">    
      
      <h2>Ajouter un produit</h2><br>

      
      <form action="index.php?action=Admin" method="POST">


          <label for="nomprod">Nom du produit</label><br>
          <input type="text" name="nom_prod" id="nom_prod" ><br><br>
          
          <label for="prenom">type</label><br>
          <input type="text" name="type" id="prenom" > <br><br>

          <label for="prix">Prix</label><br>
          <input type="numeric" name="prix" id="prix"><br><br>

          <label for="description">Description</label><br>
          <textarea id="desc" name="desc"  cols="20">

          </textarea><br><br>

          <label for="img">Image du produit</label><br>
          <input type="text" name="img" id="img"><br><br>
            
            
            <input  type="submit" name="action" value="Inserer">
            <br><br>

            
    </form>


        </div>



</article>

<?php

} else{

  header("Location: ./index.php?action=formLog");
 
 }
?>
</section>
