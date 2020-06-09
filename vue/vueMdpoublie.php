<section id="pageContent">
    <article>

        <!-- ------------------------------------------- Formulaire Login  ---------------------------------------- -->
        <div class="form-wrapper">
            
            <h1> Reinitialiser votre mot de passe : </h1>

            <form action='index.php?action=mdpoublie' method='POST'>

            <div class="wrapper">

                <img src="./img/profil.png" alt="photo login" class="log"/>
                
                <div class="Nom">
                    
                    <label for="ide">Identifiant </label> 
                    <input name="login" id="login" type="text" required >

                    <label for="mdp">Entrer un nouveau mot de passe :</label>
                    <input name="mdp" id="mdp" type="password" required>
                    
                    <label for="cmdp">Entrez à nouveau votre mot de passe :</label>
                    <input name="cmdp" id="cmdp" type="password" required >
                
                </div> 
                <?php
                if(isset($_SESSION['erreur']))
                {
                   
                    echo "<p>";
                    echo $_SESSION['erreur'];
                    echo "</p>";
                    
                    
                    session_destroy();

                }
              ?>
                <div class='bouton'>
                    <input type='submit' name='action' value='Changer' >
                    
                </div>
            </div>
        </div>
    </action>
</section>