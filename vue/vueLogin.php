
  <section id="pageContent">
    <div class="div-choose">
        <h1>Connexion en tant que : </h1>
        <p><a href="#" class="active">Utilisateur</a>  ou  <a href="index.php?action=formAdmin">Admin</a></p>
    </div>
    <article>
      <!-- ------------------------------------------- Formulaire Login  ---------------------------------------- -->
      <div class="form-wrapper">
        
          <h1> Espace utilisateur : </h1>

        <form action='index.php?action=Se connecter' method='POST'>

          <div class="wrapper">

              <img src="./img/profil.png" alt="photo login" class="log"/>
              
            <div class="Nom">
                <label for="user_name">Identifiant</label></td>
                <input name="login" id="user_name" type="text" required>
                
                <label for="password">Mot de passe</label></td> 
                <input name="mdp" id="password" type="password" required >
              
            </div> 

            <label><a href="index.php?action=mdpoublie" class="condition text-reset">Mot de passe oublié ?</a></label>

            <div class='bouton'>
                <input type='submit' name='action' value='Se connecter' >
                
            </div>
            
                <?php
              if(isset($_SESSION['erreurMessages']))
              {
                echo "<tr>";
                echo "<td colspan='2'>";
                echo $_SESSION['erreurMessages'];
                echo "</td>";
                echo "</tr>";
                
                session_destroy();

              }
              ?>
              
          </div>

        </form>
      </div>
     
  </section>

