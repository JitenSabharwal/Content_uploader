<?php

error_reporting(0);
$varhead = $_POST["intro"];
$i=1;
//$a = array();

//foreach ($_POST["'r'.'"$i"'"] as $element) { echo $element;
//i++; }
$var1 = $_POST["rule"];
//echo $var1."<br>";

$var2 = $_POST["r"];
foreach ($var2 as $s) {
  //echo $s."<br>";
}
//$i=3;
$var3 = $_POST["rt"];
$var5 = $_POST["c"];
$var4 = $_POST["cp"];
$ar_array = array(

   
            array("intro" => $varhead),array("rule" => $var1),array(array("round" => $var2,"rounddetails"=>$var3)),array("Coordinatorname"=>$var5,"Coordinatorno"=>$var4)
            
                  );  
$var6=json_encode($ar_array);
$var7="{".'"arr"'.":".$var6."}";
$myfile = fopen("record.json", "a") or die("Unable to open file!");
fwrite($myfile, $var7);

?>