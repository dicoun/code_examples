<?php

$conn = mssql_connect('10.0.5.12', 'd1_link', '123nopass');
mssql_select_db('farmin2008', $conn);

mssql_query("SET ANSI_NULLS ON");
mssql_query("SET ANSI_WARNINGS ON");
mssql_query("SET ANSI_PADDING ON");
mssql_query("SET ANSI_NULL_DFLT_ON ON");


$CompanyListID = $_POST['index'];

$type_ID = 0;
$DayCount = array(
	0 => NULL,
	1 => 30,
	2 => 45,
	3 => 60,
	4 => 70,
	5 => 80,
	6 => 90,
	7 => 100,
	8 => 110,
	9 => 120,
	10 => 130,
	11 => 140,
	12 => 150,
	13 => 160,
	14 => 170,
	15 => 180
);


for ($k=0;$k<=15;$k++) {
	$query_GetDebt = mssql_query("EXEC _FarmReport_GetDebt '".$CompanyListID."','".$type_ID."','".$DayCount[$k]."'");
	
	while($row_GetDebt = mssql_fetch_array($query_GetDebt, MSSQL_NUM)) {
		
			$row_GetDebt[0] = iconv("cp1251", "UTF-8", $row_GetDebt[0]);
			$row_GetDebt[0] = number_format($row_GetDebt[0], $decimals = 0, $dec_point = ".", $thousands_sep = " ");
			
		$GetDebt[] = $row_GetDebt[0];

	}
}

$query_GetListBook = mssql_query("EXEC _FarmReport_GetListBook '".$CompanyListID."','".$type_ID."'");


while($row_GetListBook = mssql_fetch_array($query_GetListBook, MSSQL_NUM)) {
	
	for($i=0;$i<5;$i++){
			
		$row_GetListBook[$i] = iconv("cp1251", "UTF-8", $row_GetListBook[$i]);
		
		if($i==1)
		{
			$row_GetListBook[$i] = strtotime($row_GetListBook[$i]);
			$row_GetListBook[$i] = date("d.m.Y", $row_GetListBook[$i]);
		}
		
		if($i>2){
			$row_GetListBook[$i] = number_format($row_GetListBook[$i], $decimals = 0, $dec_point = ".", $thousands_sep = " ");
		}
	}

	$GetListBook[] = $row_GetListBook;


}

$GetData[0] = $GetDebt;
$GetData[1] = $GetListBook;

echo json_encode($GetData);
