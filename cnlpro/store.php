<?php
$con = mysql_connect("mysql6.000webhost.com","a4636824_fixit","vikram2293") or die("Couldn't Connect !!");
mysql_select_db("a4636824_fixit") or die("Couldn't Find DB");
$input=$_REQUEST['value'];
$input=mysql_real_escape_string(trim($input));
$data=mysql_query("SELECT latitude,longitude FROM areas WHERE Area = '$input'");

$arrcnt=-1;
$dataArray=array();
while($temp = mysql_fetch_assoc($data))
{
	foreach($temp as $key=>$val)
	{
		$temp[$key]=stripslashes($val);
		$arrcnt++;
	}

	$dataArray[$arrcnt]=$temp;
}

echo json_encode($dataArray);
//echo json_encode($dataArray['longitude']);
?>