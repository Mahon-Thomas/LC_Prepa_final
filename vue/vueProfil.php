<section id="pageContent">

      <article>

      <div class="container-profil">
        
       <h1>Profil</h1>

        <img src="./img/avatar1.png" alt="avatar">

        <div class="formProfil">
            
              
            
          <ul >
              
              <li> Nom : <b><?php echo $_SESSION['user'][0][1] ?></b> </li>
              <li> Prénom : <b><?php echo $_SESSION['user'][0][2] ?> </b></li>
              <li> Identifiant : <b><?php echo $_SESSION['user'][0][3] ?></b> </li>
              <li> Date de naissance : <b><?php echo $_SESSION['user'][0][4] ?></b> </li>
              <li> Téléphone : <b><?php  echo $_SESSION['user'][0][5] ?></b> </li>
                <a href="index.php?action=modifProfil"> Modifier mon profil </a>
          </ul>
          
        </div>
      </div>
      </article>

      <article>
        <div class="container-order">
          <h1> Liste commande(s) </h1>

          <table class="table">

            <tr class="thead-dark ">
              <th>Numéro de commande</th>
              <th>date de commande</th>

            </tr>

            <tr>
                <?php

                    if(!empty($tblorder)){
                      
                      
                      foreach ($tblorder as $order) {
                        echo"<tr>";
                          echo  "<td>".$order['num_fact']."</td>";
                          echo  "<td>".$order['date_commande']."</td>";
                        echo"</tr>";
                        
                      }
                      
                    }else{

                      echo"<tr>";
                          echo  "<td colspan='3' class='text-center p-5'> Votre liste de commande est vide !</td>";
                          
                      echo"</tr>";
                      echo "<tr><td colspan='3'></td></tr>";
                    }
                ?>
                
            </tr>
          </table>
        </div>
      </article>

      <article>
        <div class="container-order">
          <h1> Mes poste(s) sur le forum </h1>

          <table class="table">

            <tr class="thead-dark ">
              <th>Pseudo</th>
              <th>Sujet</th>
              <th>Commantaire</th>
              <th>Date de publication</th>
            </tr>

            <tr>
                <?php

                    if(!empty($tblcomment)){
                      
                      
                      foreach ($tblcomment as $comment) {
                        echo"<tr>";
                          echo  "<td>".$comment['pseudo']."</td>";
                          echo  "<td>".$comment['sujet']."</td>";
                          echo  "<td>".$comment['comment']."</td>";
                          echo  "<td>".$comment['date_publi']."</td>";
                        echo"</tr>";
                        
                      }
                      
                    }else{

                      echo"<tr>";
                          echo  "<td colspan='3' class='text-center p-5'> Vous n'avez pas encore de postes !</td>";
                          
                      echo"</tr>";
                      echo "<tr><td colspan='3'></td></tr>";
                    }
                ?>
                
            </tr>
          </table>
        </div>
      </article>


</section>