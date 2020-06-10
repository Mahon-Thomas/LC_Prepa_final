<?php



?>
<section id="pageContent">
    


    

    <h3> Evolution Clio 1 Tuning 2015-2018 </h3><br>
    <center>
      <video class="video" src="./video/Evolution_Clio_1_Tuning_2015-2018.mp4" alt="Evolution Clio 1 Tuning 2015-2018" controls></video><br> <br>
    </center>
   

  

    <h3> voiture tuning 2 </h3><br>
    <center>
      <video class="video" src="./video/voiture_tuning_2.mp4" alt="voiture tuning 2" controls></video><br> <br>
    </center>
   </acticle>


    <article>
    
        <table class="table table-sm">
        <tr>
        <th> Pseudo </th>
        <th> sujet </th>
        <th> Commentaire </th>
        <th> Date publication </th>
        
        </tr>

        <?php
            
            
          
              $tblcomment = (empty($tblcomment) ? $tblcomment=array() : $tblcomment);

              foreach ($tblcomment as $comment) {
                
                echo "<form action='index.php?action=Accueil' method='POST'>";
                echo 
                "<tr>" 
                    ."<td>".$comment['pseudo']."</td>"
                    ."<td>".$comment['sujet']."</td>"
                    ."<td>".$comment['comment'] ."</td>
                      <td>".$comment['date_publi']."</td
                  
                </tr>";
                echo "</form>";
              }
            ?>
      
        </table>
            

        <hr>

      <div class="form-comment">  
          
          
          <h2>commentaire :</h2><br>
          <form action="index.php?action=comment" method="POST">

              <label for="sujet">Sujet</label><br>
              <select name="sujet" id="sujet">
                <option value="voiture tuning 2">voiture tuning 2 </option>
                <option value="Evolution Clio 1 Tuning 2015-2018">Evolution Clio 1 Tuning 2015-2018 </option>
              </select> <br><br>

              <label for="commentaire">Commentaire</label><br>
              <textarea id="com" name="com" cols="33">

              </textarea><br><br>
                
                <input  type="submit" name="action" value="comment">
                <br><br>

                
          </form>
        
      </div>
</article>

        
</section>