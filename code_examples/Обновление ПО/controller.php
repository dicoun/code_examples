<?php

header("Content-Type: text/html; charset=utf-8");

$filename = $_FILES['filename_win']['tmp_name'];

$ParamName = $_POST['type']."Version";

if(isset($_POST['version'])){
	
	$ParamValue = $_POST['version'];
}
elseif(isset($_POST['auto']))
{
	$ParamValue = $_POST['auto'];
}

$conn = mssql_connect('10.0.5.60', 'jetuser', '123');
	mssql_select_db('aptekajet_iretail', $conn);
	mssql_query("SET ANSI_NULLS ON");
	mssql_query("SET ANSI_WARNINGS ON");
	mssql_query("SET ANSI_PADDING ON");
	mssql_query("SET ANSI_NULL_DFLT_ON ON");
	
$select = mssql_fetch_array(mssql_query("select ParamName from dbo.T_SystemInfo where ParamName='".$ParamName."'"));

if($select==true){
	
	mssql_fetch_array(mssql_query("update dbo.T_SystemInfo set ParamValue = '".$ParamValue."' where ParamName = '".$ParamName."'"));
}
else{
	mssql_fetch_array(mssql_query("insert into dbo.T_SystemInfo (ParamName, ParamValue) values ('".$ParamName."', '".$ParamValue."')"));
}


//$scriptdata = base64_encode(fread(fopen($_FILES['script']['tmp_name'], "r"), filesize($_FILES['script']['tmp_name'])));
	
$windata = base64_encode(fread(fopen($_FILES['filename_win']['tmp_name'], "r"), filesize($_FILES['filename_win']['tmp_name'])));
	
$lin32data = base64_encode(fread(fopen($_FILES['filename_lin32']['tmp_name'], "r"), filesize($_FILES['filename_lin32']['tmp_name'])));	

$lin64data = base64_encode(fread(fopen($_FILES['filename_lin64']['tmp_name'], "r"), filesize($_FILES['filename_lin64']['tmp_name'])));	
	

$handle = fopen($_FILES['script']['tmp_name'], "r");
//$pattern = "/^.G.O./i";
//var_dump($handle);
$scriptmas = array();
$i = 0;
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
       //echo $buffer;
		//$pos = preg_match($pattern, $buffer);
		$pos = preg_match("/^GO/i", $buffer);
		if ($pos == 0) {
			$scriptmas[$i] = $scriptmas[$i].$buffer;
		}
		if ($pos == 1) {
			$i = $i +1;
		}
		//var_dump($pos);
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
	//var_dump($scriptmas);
    fclose($handle);
}	

foreach ($scriptmas as $key => $value) {
	
	$scriptmas[$key] = base64_encode($value);
}	
	

$sprav = "Справочник";

$stroka = "Строка";

if($windata!== '' or $lin32data!== '' or $lin64data!== '') {

$Res = array( array(
		"Type" => $sprav.".UpdatePackage",
		"GUID" => $_POST['type'].$ParamValue,
		"Description" => $_POST['type'],
		"Requisites" => array(),
		"Arrays" => array(),
		"Multilines" => array()
		)
	);
	
		
$win = array(
		"Type" => $stroka,
		"Id" => "OS",
		"Value" => "windows"
	);
	
$win_1 = array(
		"Type" => $stroka,
		"Id" => "file_name",
		"Value" => $_FILES['filename_win']['name']		
	);

$win_2 = array(
		"Type" => $stroka,
		"Id" => "file",
		"Value" => $windata
	);
	
$req_win = array($win, $win_1, $win_2);

$arr_win = array("Requisites" => $req_win);

$lines = array();

if($windata !==''){
	$lines[] = $arr_win;
}
	

$lin32 = array(
		"Type" => $stroka,
		"Id" => "OS",
		"Value" => "linux32"
	);
	
$lin32_1 = array(
		"Type" => $stroka,
		"Id" => "file_name",
		"Value" => $_FILES['filename_lin32']['name']		
	);

$lin32_2 = array(
		"Type" => $stroka,
		"Id" => "file",
		"Value" => $lin32data
	);
	
$req_lin32 = array($lin32, $lin32_1, $lin32_2);

$arr_lin32 = array("Requisites" => $req_lin32);

if($lin32data !==''){
	$lines[] = $arr_lin32;
}	

$lin64 = array(
		"Type" => $stroka,
		"Id" => "OS",
		"Value" => "linux64"
	);
	
$lin64_1 = array(
		"Type" => $stroka,
		"Id" => "file_name",
		"Value" => $_FILES['filename_lin64']['name']		
	);

$lin64_2 = array(
		"Type" => $stroka,
		"Id" => "file",
		"Value" => $lin64data
	);
	
$req_lin64 = array($lin64, $lin64_1, $lin64_2);

$arr_lin64 = array("Requisites" => $req_lin64);

if($lin64data !==''){
	$lines[] = $arr_lin64;
}	


$noscript = array(
				"Type" => $stroka,
				"Id" => "Version",
				"Value" => $ParamValue
				);		
				
	

	
$script = array(
				"Type" => $stroka,
				"Id" => "Script",
				"Values" => $scriptmas
			);
	
$multilines = array(
				"ID" => "Binaries",
				"Lines" => $lines	
			);	

$Res[0]["Requisites"][] = $noscript;

if ($handle){
	$Res[0]["Arrays"][] = $script;
}
$Res[0]["Multilines"][] = $multilines;

//var_dump($Res);
//exit;

$json = json_encode($Res, JSON_UNESCAPED_UNICODE);

//echo $json;
//exit;


if($curl = curl_init()){
	curl_setopt($curl, CURLOPT_URL, "http://10.0.8.1/v1/data");
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC ); 
	curl_setopt($curl, CURLOPT_USERPWD, "farmin:40itfQtMHEdemXxd"); 
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $json);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,  1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	
	$out = curl_exec($curl);
	
	if (curl_errno($curl)) 
       {
           print curl_error($curl);
           exit;
       } 
       else 
       {
        curl_close($curl);
        }
	
	$jdecode = json_decode($out);
	
	$message = serialize($jdecode[0]);
	$message = explode("\"", $message);
	$message = $message[13];
	
	echo $message;
	}
	else "Ошибка подключения к серверу";
}
else echo "Выберите хотя бы один дистрибутив программы";















