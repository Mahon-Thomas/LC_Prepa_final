<?php

require_once("./modele/modele.php");

class Employes extends DB {

  function getSelect(){

    $strSQL = "SELECT * FROM utilisateur ";
    $tabValeur = array("*");
    $sel = $this->Requete($strSQL, $tabValeur);
    return $sel;
  }

  function setDelete($id){

    $strSQL = "DELETE FROM utilisateur WHERE num = ?";
    $tabValeur = array($id);
    $del = $this->Requete($strSQL, $tabValeur);
    return $del;
  }

  function setAdd($tblemp){
    
    $strSQL = "INSERT INTO utilisateur (nom, prenom, adresse, login, date_nais, tel, email, mdp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $tabValeur = array(
      $tblemp['nom'],
      $tblemp['prenom'],
      $tblemp['adresse'],
      $tblemp['login'],
      $tblemp['date'],
      $tblemp['tel'],
      $tblemp['mail'],
      sha1($tblemp['mdp'])
    );
    $ins = $this->Requete($strSQL, $tabValeur);
    return $ins;
}

  function setUpdate($tblemp){
    
    $strSQL = "UPDATE utilisateur SET nom = :nom, prenom = :pnom , date_nais = :date, tel = :tel WHERE login = :id;";

    $tabValeur = array(
      'pnom'  => $tblemp['prenom'], 
      'nom'   => $tblemp['nom'], 
      'id' => $tblemp['id'],
      'date' => $tblemp['date'],
      'tel' => $tblemp['tel']
    );
   
    $update = $this->Requete($strSQL, $tabValeur);
    
    return $update;
   

  }

  function setUpdateuti($tblemp){

    $strSQL = "UPDATE utilisateur SET prenom = :pnom, nom = :nom, date_nais = :date, email = :mail WHERE num = :ide;";

    $tabValeur = array(
      'pnom'  => $tblemp['prenom'], 
      'nom'   => $tblemp['nom'], 
      'date'   => $tblemp['date'],
      'mail'   => $tblemp['mail'],
      'ide'   => $tblemp['ide']
    );
   
    $upd = $this->Requete($strSQL, $tabValeur);
    
    return $upd;
  }

   
}
?>