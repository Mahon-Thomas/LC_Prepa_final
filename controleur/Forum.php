<?php
require_once("./modele/modele.php");
class Forum extends DB{

    function Commentaire($tblcomment){
  
      $strSQL = "INSERT INTO forum (pseudo, sujet, comment) VALUES (?, ?,?)";
      $tabValeur = array(
        $_SESSION['user'][0][3],
        $tblcomment['sujet'],
        $tblcomment['com']
      );
      $ins = $this->Requete($strSQL, $tabValeur);
      return $ins;
  
    }
  
    function getcomments(){
  
      $strSQL = "SELECT * FROM forum ";
      $tabValeur = array("*");
      $forum = $this->Requete($strSQL, $tabValeur);
      return $forum;
    }
  
    function setSup($id){
  
      $strSQL = "DELETE FROM forum WHERE num = ?";
      $tabValeur = array($id);
      $sup = $this->Requete($strSQL, $tabValeur);
      return $sup;
    }
  
  
  }

?>