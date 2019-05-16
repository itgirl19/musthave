<?php include "constants.php"; ?>
<?php include "functions.php"; ?>
<?php include "debug.php";     ?>

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
		 <?php consoleLog("Start display products"); ?> 
		 <?php consoleLog($_POST);?>
		 <?php consoleLog("Ready display products"); ?> 
		 
		 
		 <?php 
		 if (!formErrors()) {
			 echo showSelectedProducts($_POST);
		 }   
		 ?>
		 
		 
		 <?php debugWrite("musthave.log",    "start display products") ?>
		 <?php debugWrite("mustnothave.log", "ready display products") ?>
      </section>
	  
	  
      <section class="column_company col_04">
        <h2>Bedrijfsgegevens</h2>
		<?= showCompanyInfo(); ?>
      </section>
    </div>

	<?php include "footer.php"; ?>

  </body>
</html>
  
