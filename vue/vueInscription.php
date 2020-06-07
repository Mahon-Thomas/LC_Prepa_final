
  <section id="pageContent">

  <article>

        

      <div class="form-wrapper">

         
      <h1>Inscrivez-vous sur LC Prépa : </h1>

            <form action="index.php?action=Accueil" method="POST">
          <div class="wrapper">

          
              <div class="Nom">

                  <label for="nom">Nom :</label>
                  <input type="text" name="nom" id="nom"  minlength='2' maxlength='25' placeholder="Gravier">

                  <label for="prenom">Prénom :</label>
                  <input type="text" name="prenom" id="prenom"  minlength='2' maxlength='25' placeholder="Antoine">

                  <label for="adresse">Adresse :</label>
                  <input type="text" name="adresse" id="adresse"  minlength='2' maxlength='25' placeholder="45 rue ...">
                  
                  <label for="login">Identifiant :</label>
                  <input type="text" name="login" id="login"  minlength='2' maxlength='25' placeholder="Antoine775">
              
                  <label for="date">Date de naissance :</label>
                  <input type="date" name="date" id="date"  minlength='2' maxlength='25' >
                  
    
                  <label for="tel">Numéro Téléphone</label>
                  <input type="text" name="tel" id="tel" placeholder="0693587465">
              
                  <label for="mail">Mail</label>
                  <input type="text" name="mail" id="mail"  minlength='2' maxlength='50' placeholder="lc974@gmail.com">

                  <label for="mdp">Mot de Passe</label>
                  <input type="password" name="mdp" id="mdp"  minlength='2' maxlength='50' placeholder="Lcdel974@@">


                 
              </div>
              
                  <div class="checklabel">

                  <input  type="checkbox" id="acceptCondition" name="acceptCondition" required>
                  <label  for="acceptCondition">En cochant cette case, J'accepte les <a href="index.php?action=charte" class="condition">conditions d'utilisatons</a> et la <a class="condition"href="index.php?action=confidentialite">politique confidentialité</a> du site.</label>


                  </div>

              <div class='bouton'>
                  
                  <input type="submit" name="action" value="Inscrire">

              </div>
                
            </div>
              </form>
      </div>
      </article>



