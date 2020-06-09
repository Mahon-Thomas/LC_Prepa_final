<?php
require_once("./modele/modele.php");
class Forum extends DB{

    function Commentaire($tblcomment){
      $date = date("Y-m-d H:i:s");
      
      $strSQL = "INSERT INTO forum (pseudo, sujet, comment, date_publi) VALUES (?, ?, ?, ?)";
      $tabValeur = array(
        $_SESSION['user'][0][3],
        $tblcomment['sujet'],
        $tblcomment['com'],
        $date

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

    function allComment($session){

      $strSQL = "SELECT * FROM forum where pseudo = '".$session."';";
      
      $tabValeur = array("*");
      $result = $this->Requete($strSQL, $tabValeur);
     
      return $result;
    }
  
    function setSup($id){
  
      $strSQL = "DELETE FROM forum WHERE num = ?";
      $tabValeur = array($id);
      $sup = $this->Requete($strSQL, $tabValeur);
      return $sup;
    }
  
  
  }

?>