<!--
  Class:    4A7B
  Name:     L. Heijde
  Purpose:  Debug MUSTHAVE SHOP 

  dd-mm-yyyy  Description
  ----------  ------------------------------------------
  04-06-2018  Initial 
-->

<?php

  function consoleLog($debugText) {
	  
	
	  if (is_array($debugText)) {
	  	$buffer = implode(",",$debugText);
	  } else {
	    $buffer = $debugText;
	  }
	
	  $buffer = date("Y-m-d H:i:s") . ": $buffer";
	
	  echo "<script>";
	  echo "console.log('$buffer');";
	  echo "</script>";
	  return;
	
  }

  function debugWrite($filename, $debugText) {
    $debugFile = $filename;
	
	  $myfile = fopen($debugFile, "w");
	  fwrite($myfile, "\n" . date("Y-m-d H:i:s") . ": $debugText");
	  fclose($myfile);
	
}


?>