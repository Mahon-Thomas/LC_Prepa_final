<?php
require_once("./modele/modele.php");
class Commande extends DB{

    function InsertOrder($session){
       
            $numclient = intval($session[0][0]);
            $numfact = strftime("%y%m%I%M").$session[0][0].count($_SESSION['panierprod']);
            $date = strftime("%e/%m/%Y");
           
            $strSQL = "INSERT INTO commande (num_fact, num_client, date_commande) VALUES (?, ?, ?)";
            $tabValeur = array(
            $numfact,
            $numclient,
            $date
            );
            
            $ord = $this->Requete($strSQL, $tabValeur);
            return $numfact;
            
    }

    function getOrder($order){
        
        $strSQL="SELECT * FROM `commande` where num_fact = ".$order;
  $tabValeur = array("*");

  $result = $this->Requete($strSQL, $tabValeur);
  return $result;

    }

    function allOrder($numclient){

        $strSQL="SELECT * FROM `commande` where num_client = ".$numclient;
        $tabValeur = array("*");  

        $result = $this->Requete($strSQL, $tabValeur);
        return $result;
      
    }
}
?>