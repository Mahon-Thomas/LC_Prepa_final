<?php
if(!empty($_SESSION['user']) || !empty($_SESSION['userId'])){
$Num =  $_SESSION['user'][0][0];
$Nom = $_SESSION['user'][0][1];
$Prenom = $_SESSION['user'][0][2];
$Login = $_SESSION['user'][0][3];
$tel = $_SESSION['user'][0][5];
$adresse = $_SESSION['user'][0][6];
$email = $_SESSION['user'][0][7];

$numfact = $tblorder[0][1];

$_SESSION['num_fact'] = $numfact;
?>

<section id="pageContent">

<h1> Facture de votre commande </h1>
    <article>
        <div class="coordlc">
            
                <div class="logoC">
                    <img src="./img/logo.png" alt="Logo" width="150px"/>
                </div>
                <div class="coordC">
                    <p class="titre"> LC PREPA 974 </p>
                    <p> 54 rue Pasteur, 97425 Saint-Lord </p>
                    <p> Réunion, France </p>
                    <p> Téléphone : 06 62 22 22 22 </p>
                    <p> Email : lcprepa@gmail.com </p>
                </div>
            
        </div>

        <div class="coordCli">
            <div class="cadre">
                <p> <?php echo $Nom ?> <?php echo $Prenom ?></p>
                <p> Téléphone : <?php echo $tel ?></p>
                <p> Adresse : <?php echo $adresse ?></p>
                <p> Email : <?php echo $email ?></p>
            </div>
        

            <h4> commande passer le <?php echo (strftime("%A %d %B")); ?><h4>
        
        </div>

        

    </article>

    <article>
        
        <h4 class="text-center titrefact"> Facture n°<?php echo $numfact ?> </h4>
        
      <!-- Les produit commander -->  
        <div class="table-fact-prod">
            <table class="table" cellpadding="10" cellspacing="1">

                <tbody>

                <tr>
                    <thead class="thead">
                        <th class="tbl_head" colspan="2">

                        <h4 class="tbl_head_txt">Produit</h4>

                        </th>

                        <th class="tbl_head">

                        <h4 class='tbl_head_txt'>Type</h4>

                        </th>

                        <th class="tbl_head" width="5%">

                        <h4 class="tbl_head_txt">Quantité</h4>

                        </th>

                        <th class="tbl_head" width="10%">

                        <h4 class="tbl_head_txt">Unité</h4>

                        </th>

                        <th class="tbl_head" width="10%">

                        <h4 class="tbl_head_txt">Prix</h4>

                        </th>
                    </thead>
                </tr>

                ​

                <?php

                if (isset($_SESSION["panierprod"])) {

                    $total_quantity = 0;

                    $total_price = 0;

                    

                }

                foreach ($_SESSION["panierprod"] as $prod) {

                    $prod_prix = $prod["qte"] * $prod["prix"];
                    ?>
                        <tr>
                            <td colspan="2">

                                <div class="pdt_line">

                                <?php

                                    echo '<img src="'.$prod["img"].'" alt="img_pdt" class="img_pdt"/>';

                                    echo '<p class="txt_pdt">'.$prod["nom"].'</p>';

                                ?>

                                </div>

                            </td>
                            
                            <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.$prod["type"].'</p>'; ?> </div></td>

                            <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.$prod["qte"].'</p>'; ?> </div></td>

                            <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.$prod["prix"]."€ </p>"; ?> </div></td>

                            <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.number_format($prod_prix, 2) ."€ </p>"; ?> </div></td>
                            
                        </tr>

                    <?php

                        

                    $total_quantity += $prod["qte"];

                        $total_price += ($prod["prix"] * $prod["qte"]);

                    $tvap = 8.5;
                    $tva = $tvap / 100;

                    $montantTva = $total_price * $tva;

                    }

                    ?>


                <tr>

                    <td colspan="5" text-align="right">Sous-total :</td>
                    <td text-align="right" colspan="1"><strong><?php echo number_format($total_price, 2) ." €"; ?></strong></td>
                    

                </tr>

                <tr>
                    <td colspan="5" text-align="right">TVA (8,5%) :</td>
                    <td text-align="right" colspan="1"><strong><?php echo number_format($montantTva, 2)." €"; ?></strong></td>
                    
                </tr>
                <?php
                    $montanttotal = $total_price + $montantTva ;
                ?>
                <tr>
                    <td colspan="5" text-align="right">Montant Total : </td>
                    <td text-align="right" colspan="1"><strong><?php echo number_format($montanttotal, 2)." €"; ?></strong></td>
                    
                </tr>
                </tbody>

                <tr>
                    <td></td>
                    
                    
                    <td colspan="6" class="text-right ">
                    <a href="index.php?action=endorder" class="btn btn-primary">Retour à l'accueil</a>
                    <a href="index.php?action=pdf" class="btn btn-danger">Convertir en pdf</a>
                    </td>
                </tr>
            </table>
        </div>
      <!--      Fin              -->
    
    </article>
</section>
<?php
}else{
 header("Location: index.php?action=Accueil");
}
?>