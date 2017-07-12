<?php

$login = $_SESSION['login'];
//$login = "elena.shevel";

//echo $login;

$mysqli = new mysqli("10.0.5.55", "root", "Fufnfrhbcnb", "assistant");
if ($mysqli->connect_errno) {
	echo "Не удалось подключиться к MySQL:".$mysqli->connect_error; 
	exit;
	}
//else echo "OK";
//exit;
$mysqli->query("SET NAMES utf8");

$result = $mysqli->query("select * from `search.farmin` where LOGIN like '$login' limit 1");
//var_dump($result);
//exit;
$num_rows = $result->num_rows;
if($num_rows > 0){
	$row = $result->fetch_array();

//var_dump($row);	
	
	$fio = $row['FIO'];
	$otch = $row['OTCH'];

	$arr = explode(" ", $fio);
//echo $fio;
	$name = $arr[0];
	$surname = $arr[1];

	$arr_2 = array($surname, $name, $otch);
	$str = implode(" ", $arr_2);
}
else{
	$result = $mysqli->query("select * from `search.holding` where LOGIN like '$login' limit 1");
	$num_rows = $result->num_rows;
	if($num_rows > 0){
		$row = $result->fetch_array();
		$fio = $row['FIO'];
		$otch = $row['OTCH'];

		$arr = explode(" ", $fio);
		//echo $fio;
		$name = $arr[0];
		$surname = $arr[1];

		$arr_2 = array($surname, $name, $otch);
		$str = implode(" ", $arr_2);
	}
	else{
		$result = $mysqli->query("select * from `search.apt` where LOGIN like '$login' limit 1");
		$num_rows = $result->num_rows;
		if($num_rows > 0){
			$row = $result->fetch_array();
			$str = $row['FIO'];
		}
	}
}

/*$result = $mysqli->query("select * from `search.autocomplete` where LOGIN like '$login' limit 1");
$num_rows = $result->num_rows;
if($num_rows > 0){
	$row = $result->fetch_array();
	$org = $row['ORG'];
	if(!isset($org)){
		//$test = "test";
		$org = $row['NAME'];
		$arr = explode(", ", $org);
		$org = $arr[1];
		if($org == "Фармин"){	
			$org = "ОДО \"Фармин\"";
		}
		if($org == "Фитобел"){	
			$org = "ООО \"Фитобел\"";
		}
		if($org == "Не Ска"){
			$org = "ООО \"Не Ска\"";
		}
	}
}	*/
	
$result = $mysqli->query("select * from `search.autocomplete` where LOGIN like '$login' limit 1");
$num_rows = $result->num_rows;
if($num_rows > 0){
	$row = $result->fetch_array();
	$dol = $row['DOL'];
	$otdel = $row['OTDEL'];
}

$Arr = array($str, $dol, $otdel);

	
	
	
	
	
echo json_encode($Arr);


