<section id="pageContent">
    <div class="div-choose">
        <h1>Connexion en tant que : </h1>
        <p><a href="index.php?action=Connexion" class="active">Utilisateur</a> ou  <a href="#">Admin</a></p>
    </div>
    <article>
        <div class="form-wrapper">
            

            <form action='index.php?action=Login' method='POST'>
                <h1> Espace administration : </h1>
            <div class="wrapper">

                <img src="./img/profil.png" alt="photo login" class="log"/>
                
                <div class="Nom">
                    <label for="username">Identifiant</label></td>
                    <input name="user_name" id="username" type="text" required>
                    
                    <label for="pwd">Mot de passe</label></td> 
                    <input name="password" id="pwd" type="password" required >
                
                </div> 

                <div class='bouton'>
                    <input type='submit' name='action' value='Login' >
                    
                </div>
                
                    <?php
                if(isset($_SESSION['erreurMessage']))
                {
                    echo "<tr>";
                    echo "<td colspan='2'>";
                    echo $_SESSION['erreurMessage'];
                    echo "</td>";
                    echo "</tr>";
                    
                    session_destroy();

                }
                ?>
                
            

            </form>


                
        </div>        
    </article>
</section>
