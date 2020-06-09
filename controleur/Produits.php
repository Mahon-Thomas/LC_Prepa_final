<?php
require_once("./modele/modele.php");

Class Produit extends DB {

function Search($tblprod){
  $limite = 4;

  $SQL="SELECT count('num_prod') FROM `produit`";
  $tab = array("*");

  $Nb = $this->Requete($SQL, $tab);
  
  $Nbprod = $Nb[0];
  
  $Nbtotalpage = ceil($Nbprod[0]/$limite);
  if(isset($_REQUEST['page']) AND !empty($_REQUEST['page']) AND $_REQUEST['page'] > 0 AND $_REQUEST['page'] <= $Nbprod) {

    $_REQUEST['page'] = intval($_REQUEST['page']);
    $pageCourante = $_REQUEST['page'];
  
  } else {
  
    $pageCourante = 1;
  }
 
  
  $strSQL = "SELECT * FROM produit 
              WHERE nom_prod LIKE  :nom 
              OR type     LIKE  :nom
            ";

  empty($tblprod['nom_prod'])  ? $tblprod['nom_prod'] = '*' : $tblprod['nom_prod']; 
 

  $tabValeur = array(
        'nom'  => "%".$tblprod['nom_prod']."%"
      );

  $sch = $this->Requete($strSQL, $tabValeur);
  
  return array($sch, $pageCourante, $Nbtotalpage);

}

function getArticle() {
  $strSQL="SELECT * FROM `produit` ORDER BY rand() limit 0,4 ";
  $tabValeur = array("*");
  return $this->Requete($strSQL,$tabValeur);
}

function getArticles() {
  
  $limite = 6;

  $SQL="SELECT count('num_prod') FROM `produit`";
  $tab = array("*");

  $Nb = $this->Requete($SQL, $tab);
  
  $Nbprod = $Nb[0];
  
  $Nbtotalpage = ceil($Nbprod[0]/$limite);
  
  if(isset($_REQUEST['page']) AND !empty($_REQUEST['page']) AND $_REQUEST['page'] > 0 AND $_REQUEST['page'] <= $Nbprod) {

    $_REQUEST['page'] = intval($_REQUEST['page']);
    $pageCourante = $_REQUEST['page'];
  
  } else {
  
    $pageCourante = 1;
  }

$depart = ($pageCourante-1)*$limite;

  $strSQL="SELECT * FROM `produit`  limit ".$depart.",".$limite;
  $tabValeur = array("*");
  
  $valeur = $this->Requete($strSQL,$tabValeur);

  return array($valeur,$pageCourante,$Nbtotalpage);

}




function panier($prod){
  $strSQL="SELECT * FROM `produit` where num_prod = ".$prod['num_prod'];
  $tabValeur = array("*"
  );
  
  
  $prodResultat = $this->Requete($strSQL, $tabValeur);

  

    $itemArray = array($prodResultat[0]["num_prod"]=>array('nom'=>$prodResultat[0]["nom_prod"], 'type'=>$prodResultat[0]["type"], 'qte'=>$prod["qte"], 'prix'=>$prodResultat[0]["prix_prod"], 'img'=>$prodResultat[0]["img_prod"], 'idprod'=>$prodResultat[0]["idprod"]));
        if(!empty($_SESSION["panierprod"])) {
          if(in_array($prodResultat[0]["num_prod"],array_keys($_SESSION["panierprod"]))) {
            foreach($_SESSION["panierprod"] as $k => $v) {
                
                if($prodResultat[0]["num_prod"] == $k) {

                  if(empty($_SESSION["panierprod"][$k]["qte"])) {

                    $_SESSION["panierprod"][$k]["qte"] = 0;
                  }
                  $_SESSION["panierprod"][$k]["qte"] += $_POST["qte"];
                }
            }
          } else {
            $_SESSION["panierprod"] = array_merge($_SESSION["panierprod"],$itemArray);
          }
        } else {
          $_SESSION["panierprod"] = $itemArray;
        }
       
          return $_SESSION["panierprod"];
      
  

}


function setProd($tblprod){
  
  $strSQL = "INSERT INTO produit (nom_prod, type, prix_prod, desc_prod, img_prod) VALUES (?, ?,?, ?, ?)";
  $tabValeur = array(
    $tblprod['nom_prod'],
    $tblprod['type'],
    $tblprod['prix'],
    $tblprod['desc'],
    "<img src='./img/".$tblprod['img']."' width='150px'>"
  );
  $ins = $this->Requete($strSQL, $tabValeur);
  return $ins;
}

}