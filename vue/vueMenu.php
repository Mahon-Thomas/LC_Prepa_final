<?php

if (!empty($_SESSION['userId']) ) {
  
  $afficherNom = $_SESSION['userId'][0][3];
  $deco = "<li><a href='index.php?action=Deco'> Déconnexion </a></li>";
} else if (!empty($_SESSION['user'])) {

  $afficherNom = $_SESSION['user'][0][1];
  $deco = "<li><a href='index.php?action=Deco'> Déconnexion </a></li>";

}


?>
  <header>
    <div id="logo"><img src="./img/logo.png" alt="Logo"></div>
    

    <div class="caddie"><a href="index.php?action=panier"><img src='./img/cart.png' width='40px'></div></a>
      <!-- ------------------------------------------- Menu ---------------------------------------- -->
    <nav>  
        <ul>
            
            <li >
            <a class="effet" href="index.php?action=Accueil">
            <span></span>
            <span></span>
            <span></span>
            <span></span>

             Accueil </a>
            </li>
            
            <li>
            <a class="effet" href="index.php?action=Prods&page">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
             Produits </a>
            </li>
            
            <li><a class='effet' href="index.php?action=forum">
            <span></span>
            <span></span>
            <span></span>
            <span></span>     
              Forum</a></li>
            
                <?php
                  if (!empty($afficherNom) && !empty($deco)){
                    echo "<li class='deroulant'> <a class='effet' href=#>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Connecté, ".$afficherNom."</a> 
                            <ul class='sous'>";
                            if ($afficherNom === 'Administrateur'){

                            echo "<li><a href='index.php?action=formLog'>Administrateur</a></li>";

                            }else {

                            echo "<li><a  href='index.php?action=profil'>Profil </a></li>";
                            
                            }
                            echo $deco;
                      
                      echo "</ul></li>";
                      
                  }else{
                    echo  "<li><a class='effet' href='index.php?action=Ajouter'>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Inscription</a></li>";
                    echo "<li><a class='effet' href='index.php?action=formLog'>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Connexion</a></li>";
                  }
                ?>
         
        </ul> 
    </nav>
  </header>
  


  