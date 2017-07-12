<?php

$filename[] = $_FILES['filename_win']['tmp_name'];
$filename[] = $_FILES['filename_lin32']['tmp_name'];
$filename[] = $_FILES['filename_lin64']['tmp_name'];


for($i = 0; $i <= 2; $i++){

$string[$i] = file_get_contents($filename[$i]);


if($string[$i] !== false){

if($_POST['type'] == "JetRetail"){
	$pos_JR = stripos($string[$i], 'AssemblyVersion');

	if($pos_JR !== false){
		
		preg_match_all("/A.s.s.e.m.b.l.y...V.e.r.s.i.o.n.................../", $string[$i], $matches);
		$mas = explode("n", $matches[0][0]);
		$version[$i] = preg_replace("/[^(\d\.)]*/", "", $mas[1]);
		
	}
	else {
		echo "Выберите верный дистрибутив.";
		exit;
	}
}

elseif($_POST['type'] == "AdditionJetRetail"){
	$pos_AJR = stripos($string[$i], 'manifestVersion');
	if($pos_AJR !== false){
	
		preg_match_all("/F.i.l.e.V.e.r.s.i.o.n..................../", $string[$i], $matches);
		$match = array_reverse($matches[0]);
		$mas = explode("n", $match[0]);
		$version[$i] = preg_replace("/[^(\d\.)]*/", "", $mas[1]);
		
	}
		else {
			echo "Выберите верный дистрибутив.";
			exit;
		}
	
	}

}

else{
	$version[$i] = "";
	}

}

//$write = file_put_contents('test.txt', $version);
echo json_encode($version, JSON_UNESCAPED_UNICODE);

