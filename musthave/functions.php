<!--
  Class:    4A7B
  Name:     L. Heijde
  Purpose:  footer MUSTHAVE SHOP 

  dd-mm-yyyy  Description
  ----------  ------------------------------------------
  14-05-2018  Initial 
-->

<?php

if(!function_exists('dd')) {
    function dd($array) {
        echo '<pre>';
        var_export($array);
        echo '</pre>';
        die();
    }
}

if(!function_exists('d')) {
    function d($array) {
        echo '<pre>';
        var_export($array);
        echo '</pre>';
    }
}

function showCompanyInfo() {
    $result = '';
	require_once "constants.php";
	
	
    $result .= '<p>';
    $result .= COMPANY       .   '<br>';
    $result .= ADDRESS       .   '<br>';
    $result .= POSTALCODE    .   '<br>';
    $result .= CITY          .   '<br>';
    $result .= '</p>';

    $result .= '<p>';
    $result .= TELEPHONE    .   '<br>';
    $result .= EMAIL        .   '<br>';
    $result .= WEBSITE      .   '<br>';
    $result .= '</p>';

    $result .= '<p>';
    $result .= 'KVK:  '  . KVK   .   '<br>';
    $result .= 'BTW:  '  . BTW   .   '<br>';
    $result .= 'IBAN: '  . IBAN  .   '<br>';
    $result .= '</p>';

    return $result;
  }
 

 
function formErrors() {
	
	if ($_SERVER["REQUEST_METHOD"] != "POST") {
		
		echo '<article>';
		echo 'ERROR: This is NOT a proper request!';
		echo '</article>';
		
		return true;
	}
	
	return false;
}  


function  showSelectedProducts($products) {
    $result = '';
	$maxProduct = count($products);
    $result .= "<br>Aantal producten: $maxProduct";

    $result .= '<article>';

	foreach($products as $ndx => $value) {
        $result .= "<br>". str_replace('_', ' ', ucfirst($ndx)) ." - {$value}";
	}

    $result .= '<article>';
	
	$totalPrice = $products['article_amount'] * $products['article_price'];
	$result .= "Totaal besteld bedrag: $totalPrice";

	return $result;
}

?>

















