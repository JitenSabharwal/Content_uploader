<?php
$jsondata = file_get_contents('record.json');
$data=json_decode($jsondata, true);
//print_r($data);
$id1 = $data['arr'][0]["intro"];
$id2 = $data['arr'][1]["rule"];
$id3 = $data ['arr'][2][0]["round"];
$id4 = $data ['arr'][2][0]["rounddetails"];
$id5 = $data ['arr'][3]["Coordinatorname"];
$id6 = $data ['arr'][3]["Coordinatorno"];
echo "Intoduction : "."<br>".$id1."<br>";
echo "Rules : "."<br>";
foreach ($id2 as $s1) {
  echo "-".$s1."<br>";
}
echo "Rounds  Round-Details : "."<br>";
foreach ($id3 as $s1) {
	foreach ($id4 as $k) {
	echo "-".$s1." ".$k."<br>";
}
}
echo "Coordinatorname  Coordinatorno : "."<br>";
foreach ($id5 as $s1) {
	foreach ($id6 as $k) {
	echo "-".$s1." ".$k."<br>";
}
}
?>