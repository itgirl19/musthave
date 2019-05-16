<?php include "constants.php"; ?>
<?php include "functions.php"; ?>

<!DOCTYPE html>
<html>
<!--
  Class:    4A7B
  Name:     L. Heijde
  Purpose:  Responsive grid view MUSTHAVE SHOP 02

  dd-mm-yyyy  Description
  ----------  ------------------------------------------
  04-05-2018  Initial 
  08-05-2018  Add class for grid view (col_)
  14-05-2018  Add includes
-->

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="css/musthave_02.css">
	
    <title><?= TITLE ?></title>
  </head> 

  <body>

	<?php include "header.php";    ?>

    <div class="newrow">
	
      <section class="column_article col_08">
		<article>
	      MUSTHAVE is 15 jaar geleden ontstaan uit de behoefte om carnavalsartikelen online 
		  te kunnen (ver)kopen. Inmiddels heeft MUSTHAVE alle mogelijke artikelen 
		  die je heel graag wilt hebben maardie eigenlijk van geen enkel nut zijn.

        </article>

       <form name="order" action="musthave_order.php" method="POST">
  
        <article class="newrow">
		
           <div class="article_col01">
	         <img class="article_img" src="img/938162.jpg" alt="rainbow fire powder"><br>
			 Aantal: <input class="article_amount" type="text" name="article_amount" value="0" minlength="0"  maxlength="2" max="99" size="2">
	       </div>
		  
          <div class="article_col02">
		      
			        <input class="article_description" type="text"   name="article_description" value="rainbow fire powder" size="17" readonly><br>
			  &euro;<input class="article_price"       type="text"   name="article_price"       value="3.24"                size="10" readonly><br>
		            <input class=""                    type="hidden" name="article_code"        value="938162">
	        
            <p>
	        Gebruik dit poeder om vlammen te krijgen in alle kleuren van de regenboog.
            </p>	
          </div>
		  
        </article>
  
         <input class="musthave_button" type="submit" name="submit" value="Bestellen">
         <input class="musthave_button" type="reset" value="Reset">
   
       </form>  
      </section>
	  
	  
      <section class="column_company col_04">
        <h2>Bedrijfsgegevens</h2>
		<?= showCompanyInfo(); ?>
      </section>
    </div>

	<?php include "footer.php"; ?>
	
	
  </body>
</html>
  
  
  
  
  
  