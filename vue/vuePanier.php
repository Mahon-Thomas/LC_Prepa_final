<section id="pageContent">

  <article>
    <?php
   if (isset($_SESSION["panierprod"])) {

    ?>
  <table class="table tbl-cart" cellpadding="10" cellspacing="1">

      <tbody>

        <tr>

          <th class="tbl_head" colspan="2">

            <h4 class="tbl_head_txt">Produit</h4>

          </th>

          <th class="tbl_head">

            <h4 class='tbl_head_txt'>Type</h4>

          </th>

          <th class="tbl_head">

            <h4 class="tbl_head_txt">Id produit</h4>

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

          <th class="tbl_head" width="5%">

            <h4 class="tbl_head_txt">Supprimer</h4>

          </th>

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

                <td colspan="2">

                  <div class="pdt_line">

                    <?php

                      echo '<img src="'.$prod["img"].'" alt="img_pdt" class="img_pdt"/>';

                      echo '<p class="txt_pdt">'.$prod["nom"].'</p>';

                    ?>

                  </div>

                </td>
              
                <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.$prod["type"].'</p>'; ?> </div></td>

                <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.$prod["idprod"].'</p>'; ?> </div></td>

                <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.$prod["qte"].'</p>'; ?> </div></td>

                <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.$prod["prix"]."€ </p>"; ?> </div></td>

                <td><div class="pdt_line"> <?php echo '<p class="txt_pdt">'.number_format($prod_prix, 2) ."€ </p>"; ?> </div></td>

                <td><div class="pdt_line"><a class="txt_pdt" href="index.php?action=deletep&idprod=<?php echo $prod["idprod"]; ?>"><img src="./img/delete.png" alt="Supprimer Produit" /></a>  </div></td>
              
              </tr>

          <?php

              

            $total_quantity += $prod["qte"];

                $total_price += ($prod["prix"] * $prod["qte"]);

            }

          ?>


        <tr>

          <td colspan="6" text-align="right">Sous-total:</td>
          <td text-align="right" colspan="1"><strong><?php echo number_format($total_price, 2) ." €"; ?></strong></td>
          <td></td>

        </tr>

        <tr>
          <td colspan="6"></td>
        <td  colspan="2" class="text-right"><a class="btn btn-primary" type="submit" href="index.php?action=commande"> Passer commande </a></td>

        </tr>

      </tbody>

    </table>

    <?php
    }else {
            echo "<div class='empty'>
            <h1> Votre panier est actuellement vide ! </h1>
           </div>";
}
?>
  </article>

</section>