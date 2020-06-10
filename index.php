<?php 
  // Cela signifie que vous ne souhaitez pas voir le résultat de votre script mis une fois pour toutes en cache, 
  header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
  header("Cache-Control: no-cache");
  header("Pragma: no-cache");
  
  try {

      if (isset($_REQUEST['action'])) 
      {
        session_start();
        require "./vue/vueHeader.php";
        require "./controleur/controleur.php";
        require "./controleur/membre.php";
        require "./controleur/Forum.php";
        require "./controleur/Commande.php";
        require "./controleur/Produits.php";
        require "./vue/vueMenu.php";
        $employe = new Employes();
        $prod = new Produit();
        $comment = new Forum();
        $order = new Commande();
        


       if($_GET['action'] == 'charte'){

        include 'vue/charte.php';

       }


       if($_GET['action'] == 'contact'){

        include 'vue/contact.php';
      }

      if($_GET['action'] == 'confidentialite'){
        include 'vue/confidentialite.php';
      }

      if($_GET['action'] == 'apropos'){

        include 'vue/apropos.php';
      }


       if ($_REQUEST['action'] == 'Supprimer') {
          
          $employe->setdelete(intval($_POST['ide']));
          $tblEmp = $employe->getSelect();
          include "./vue/VueDashboard.php";
         
        } 



        if ($_REQUEST['action']=='commande'){

          if (!empty($_SESSION["panierprod"]) && !empty($_SESSION['user'])){
            
            $res = $order->InsertOrder($_SESSION['user']);
            
            $tblorder = $order->getOrder($res);
            include './vue/vueOrder.php';

          }else{
            header ("Location: index.php?action=Accueil");
          }

          
        }



        if($_REQUEST['action'] == 'pdf'){
          if (!empty($_SESSION['num_fact'])){
          
          include "./vue/pdf.php";
          
          }
          
        }

        if ($_REQUEST['action'] == 'endorder'){
          unset($_SESSION['panierprod']);

          header("Location: index.php?action=Accueil");
        }

        
        if ($_REQUEST['action'] == 'deletep') {
        if(!empty($_SESSION["panierprod"])) {

          
              foreach($_SESSION["panierprod"] as $k => $v) {
                    
                if($_REQUEST["idprod"] == $_SESSION["panierprod"][$k]['idprod'])
               
                  unset($_SESSION["panierprod"][$k]);	
           		
                if(empty($_SESSION["panierprod"]))
                  unset($_SESSION["panierprod"]);
            }


            }


            header ("Location: index.php?action=panier");
          
          
        
      }
        if ($_REQUEST['action'] == 'Ajouter') {
          
          include "./vue/vueInscription.php";
         
        } 
         if ($_REQUEST['action'] == 'Inscrire') {
        
          $employe->setAdd($_POST);
         
        } 


        if ($_REQUEST['action'] == 'Modifier') {
          if (!empty($_SESSION['user'])){

          $employe->setUpdate($_POST);
        
          $_SESSION['user'][0][1] = $_POST['nom'];
          $_SESSION['user'][0][2] = $_POST['prenom'];
          $_SESSION['user'][0][3] = $_POST['id'];
          $_SESSION['user'][0][4] = $_POST['date'];
          $_SESSION['user'][0][5] = $_POST['tel'];
          }

         header("Location: index.php?action=profil");
        } 

        if ($_REQUEST['action'] == 'Rechercher') {
          $recherche = 1;

          $tblprod = $prod->Search($_POST);
          include "./vue/vueArticles.php";
        }

        //if($_REQUEST['action'] == 'Prods'){
          //$tblprod = $prod->getArticles();
          //include "./vue/vueArticles.php";
        //}

        if($_REQUEST['action'] == 'Ajouter au panier'){
          
          
        $tblpanier = $prod->panier($_POST);
        
          header("Location: index.php?action=Prods&page");
        }


        if ($_REQUEST['action'] == 'Inserer'){
          $prod->setProd($_POST);
          header("Location: index.php?action=formLog");
        }

        if ($_GET['action'] == 'panier') {
          
          include "./vue/vuePanier.php";
        }

        if ($_REQUEST['action'] == 'mdpoublie'){
          include "./vue/vueMdpoublie.php";
        }

        if ($_REQUEST['action'] == 'Changer'){
          if($_POST['mdp'] == $_POST['cmdp']){
          $employe->Mdp($_POST);
          include "./vue/vueLogin.php";
          }else{
            $_SESSION['erreur'] = "les mots de passes ne se correspondent pas ou l'identifiant est incorrect pas !";
            include "./vue/vueMdpoublie.php";
          }
          
        }

        if ($_GET['action'] == 'formLog') {
          

        if (!empty($_SESSION['userId'])) {
          $tblcomment = $comment->getcomments();
          $tblEmp = $employe->getSelect();
          
          include "./vue/vueDashboard.php"; 
          
          }
          else {

            header("Location: index.php?action=Accueil");       

          }

      }

      if ($_GET['action'] == 'comment'){
       
          if (!empty($_SESSION["userId"]) || !empty($_SESSION["user"])) {

            $tblcomment = $comment->Commentaire($_POST);
            $tblcomment = $comment->getcomments();

            header("Location: index.php?action=forum");
        }
        else{
      
      include 'vue/erreurLogin.php'; 


      }

    }


  if ($_REQUEST['action'] == 'profil'){
    if (!empty($_SESSION['user'])){
      
      $tblorder = $order->allOrder($_SESSION['user'][0][0]);
      $tblcomment = $comment->allComment($_SESSION['user'][0][3]);
  
      include "./vue/vueProfil.php";

    }
  }

  if ($_GET['action'] == 'profilm'){
    if (!empty($_SESSION["userId"])){

      include "./vue/vueProfilm.php";

    }
  }


 if ($_GET['action'] == 'Prods' || $_GET['action'] == 'page'){
      $recherche = null;
       

        $tblprod = $prod->getArticles();

    if (!empty($_SESSION["userId"]) || !empty($_SESSION["user"])) {

          include "./vue/vueArticles.php";
        
       
    }else{
      
      include 'vue/erreurLogin.php'; 

      }
    }

    if ($_REQUEST['action'] == 'X') {
      
      $comment->setSup(intval($_POST['ide']));
      $tblcomment = $comment->getcomments();
      $tblEmp = $employe->getSelect();
      include "./vue/vueDashboard.php";

    }



        if ($_GET['action'] == 'forum'){
     
          if (!empty($_SESSION["userId"]) || !empty($_SESSION["user"])) {

                $tblcomment = $comment->getcomments();
                include "./vue/vueForum.php";
              
              
          }else{
            
            include 'vue/erreurLogin.php'; 

            }
      }

        if ($_GET['action'] == 'modifProfil'){

          if(!empty($_SESSION['user'])){

            include "./vue/vueProfilm.php";
            
          }
        }

        if ($_REQUEST['action'] == 'Connexion'){

          include "./vue/vueLogin.php";
        }

        if ($_REQUEST['action'] == 'formAdmin'){

          include "./vue/vueLoginAdmin.php";
        }

        if ($_GET['action'] == 'Login') {
    
          $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
          $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
         
          require_once "controleur/membre.php";
          require_once  "controleur/controleur.php";
          $membre = new Membre();
         
          $tblcomment = $comment->getcomments();
          $tblEmp = $employe->getSelect();
    

          $isLoggedIn = $membre->verifLogin($username, $password);

          
          if (! $isLoggedIn) {
              $_SESSION["erreurMessage"] = "Les informations d'identification sont invalides !";
              include "vue/vueLogin.php";
              
          
          }else{
  
            header ("Location: index.php?action=Accueil");
          }

        }


        if ($_GET['action'] == 'Se connecter') {
    
          $username = filter_var($_POST["login"], FILTER_SANITIZE_STRING);
          $password = filter_var($_POST["mdp"], FILTER_SANITIZE_STRING);
         
          require_once "controleur/membre.php";
          require_once  "controleur/controleur.php";
          $membre = new Membre();

          $isLoggedInUser = $membre->verifUser($username, $password);


          
          if (! $isLoggedInUser) {
              $_SESSION["erreurMessages"] = "Les informations d'identification sont invalides !";
              include "vue/vueLogin.php";
          
          }else{
  
            header ("Location: index.php?action=Accueil");

          }

        }
          
        
        if ($_GET['action'] == 'Accueil') {
        
          include "./vue/vue.php";
        } 
        
        if ( $_GET['action'] == 'Deco') {

        session_destroy();
        
        header("Location: index.php?action=Accueil");

       }

       include "./vue/vueFooter.php";
       
      }else {

        include "./vue/vueHeader.php";
        include "./vue/vueMenu.php";
        
        include "./vue/vue.php";
        include "./vue/vueFooter.php";
      }

      
    }catch (Exception $e) {
      erreur($e->getMessage());
  }  
  
?>
