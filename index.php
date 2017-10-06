<?php
@header('Content-Type: application/json; charset=utf-8');
require "function.php" ;
require 'class.iCalReader.php';

date_default_timezone_set('Europe/Berlin');





$ical = new ical("cal.ics");
$result_array = $ical->events();



$arr = array_values(array_filter($result_array, function($ar) {
	$today_date = date("Ymd");   //date of today
   return ($ar["DTSTART"] == "$today_date");  //TEST   $today_date
}));
//print_r($arr);



//$NewArray = array_values($arr);







$output = array();



for ($i=0;$i<sizeof($arr);$i++) {

	$ix = str_replace("@facebook.com" , "" , $arr[$i]["UID"]) ;
	$ID = str_replace("b" , "" , $ix) ;
	//echo $ID;
////////////
//	echo "\n" ;
///////////
	$friend_name = str_replace("'s birthday","",$arr[$i]["SUMMARY"]);
//	echo $friend_name ;
//////////
//	echo "\n**************\n\n" ;
	$output["$ID"] = "$friend_name" ;

//	array_push($output, $ID , $friend_name);

	
}




$f = json_encode($output, JSON_UNESCAPED_UNICODE);
$ax3 = str_replace('"',"'",$f);
$final_result = "friendlist = $ax3" ;

//echo $final_result ;
//echo date("Y/m/d - h:i");
echo "Everything is Ok .." ;

$myfile = fopen("result.py", "w") or die("Unable to open file!");
$txt = $final_result ;
fwrite($myfile, $txt);
fclose($myfile);


?>