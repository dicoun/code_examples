<html>
	<head>
		<meta charset = "utf-8">
		
		<script src="FarmReport/report.js"></script>
		<link rel="stylesheet" type="text/css" href="FarmReport/style.css" />
		
	</head>
	<body>
		<fieldset>
			<div id="left" class="block1">
				<div style="margin-top: 1%;">
					<span style="color:green; font-size: 15px; font-weight: bold; margin-left: 1%;">Отгрузки</span>
				</div>
				<hr class="hr-right">
				<div id="left_w" style="margin-left: 5%; height: 10%; width: 90%;">
					<table>
						<tr>
							<td>
								<div style="font-size: 14px; width: 64px;">Долг:</div>
							</td>
							<td>
								<div id="dolg" class="block5"></div>
							</td>
							<td>
								<select id="type" class="block4">
									<option id="empty" style="width: 300px;"></option>
									
									<?php

										$conn = mssql_connect('10.0.5.12', 'd1_link', '123nopass');
										mssql_select_db('farmin2008', $conn);

										mssql_query("SET ANSI_NULLS ON");
										mssql_query("SET ANSI_WARNINGS ON");
										mssql_query("SET ANSI_PADDING ON");
										mssql_query("SET ANSI_NULL_DFLT_ON ON");

										$query = mssql_query("EXEC _FarmReport_GetListCompany");
										$j = 0;
										while ($row = mssql_fetch_array($query, MSSQL_NUM)) {
										for($i=0;$i<3;$i++){
											$row[$i] = iconv("cp1251", "UTF-8", $row[$i]);
										
										}
			
										$types[] = $row;
		
										$j = $j+1;
										}
										
										for($i=0;$i<$j;$i++){
											echo "<option value=".$types[$i][0]." id='".$types[$i][2]."'>" .$types[$i][1]."</option>";
										}
										
									?>
																					
								</select>
							</td>
						</tr>
					</table>
					
					<table>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">30 дней:</div>
							</td>
							<td>
								<div id="30" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div  style="margin-top: 20px; margin-left: 10px; font-size: 14px;">45 дней:</div>
							</td>
							<td>
								<div id="45" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">60 дней:</div>
							</td>
							<td>
								<div id="60" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">70 дней:</div>
							</td>
							<td>
								<div id="70" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">80 дней:</div>
							</td>
							<td>
								<div id="80" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">90 дней:</div>
							</td>
							<td>
								<div id="90" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">100 дней:</div>
							</td>
							<td>
								<div id="100" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">110 дней:</div>
							</td>
							<td>
								<div id="110" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">120 дней:</div>
							</td>
							<td>
								<div id="120" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">130 дней:</div>
							</td>
							<td>
								<div id="130" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">140 дней:</div>
							</td>
							<td>
								<div id="140" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">150 дней:</div>
							</td>
							<td>
								<div id="150" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">160 дней:</div>
							</td>
							<td>
								<div id="160" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">170 дней:</div>
							</td>
							<td>
								<div id="170" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">180 дней:</div>
							</td>
							<td>
								<div id="180" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
					</table>
					
					<table>
						<tr>
							<td>
								<div id="period_1" class="block6" style="margin-top: 20px;"></div>
							</td>
						<tr>
					</table>
				</div>
				<br>
				<div id="div_1_1" style="margin-left: 1%; margin-top: 220px; height: 5%; width: auto;">
				
					<table id="table_1_1" cellspacing="0,05px" border="1" bordercolor="#877D7D">
						<tr>
							<td>
								<div id="date" class="block7" style="text-align: center; width: 100px;" >Дата</div>
							</td>
							<td>
								<div id="operation" class="block7" style="text-align: center; width: 240px;">Операция</div>
							</td>
							<td>
								<div id="otgruzka" class="block7" style="text-align: center; width: 100px;">Отгрузка</div>
							</td>
							<td>
								<div id="oplata" class="block7" style="text-align: center; width: 100px;">Оплата</div>
							</td>
						</tr>
					
					</table>
				</div>
				<div id="div_1" style="overflow-y: auto; overflow-x: hidden; margin-top: -2%; margin-left: 1%; height: 51%; width: auto;">
				
					<table id="table_1" cellspacing="0,05px" border="1" bordercolor="#877D7D"></table>
				
				</div>
			</div>
			
			<div id="right" class="block2">
				<div style="margin-top: 1%;">
					<span style="color:green; font-size: 15px; font-weight: bold; margin-left: 1%;">Тендер</span>
				</div>
				<hr class="hr-right">
				
				
				
				
				
				<div style="margin-left: 5%; height: 10%; width: 90%;">
					<table>
						<tr>
							<td>
								<div style="font-size: 14px; width: 64px;">Долг:</div>
							</td>
							<td>
								<div id="dolg_2" class="block5"></div>
							</td>
							<td>
								<select id="type_2" class="block4">
									<option id="empty_2" style="width: 300px;"></option>
									
									<?php

										$conn = mssql_connect('10.0.5.12', 'd1_link', '123nopass');
										mssql_select_db('farmin2008', $conn);

										mssql_query("SET ANSI_NULLS ON");
										mssql_query("SET ANSI_WARNINGS ON");
										mssql_query("SET ANSI_PADDING ON");
										mssql_query("SET ANSI_NULL_DFLT_ON ON");

										$query = mssql_query("EXEC _FarmReport_GetListCompany");
										$j = 0;
										while ($row = mssql_fetch_array($query, MSSQL_NUM)) {
										for($i=0;$i<3;$i++){
											$row[$i] = iconv("cp1251", "UTF-8", $row[$i]);
										
										}
			
										$types[] = $row;
		
										$j = $j+1;
										}
										
										for($i=0;$i<$j;$i++){
											echo "<option value=".$types[$i][0]." id='".$types[$i][2]."'>" .$types[$i][1]."</option>";
										}
										
									?>
																					
								</select>
							</td>
						</tr>
					</table>
					
					<table>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">30 дней:</div>
							</td>
							<td>
								<div id="230" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div  style="margin-top: 20px; margin-left: 10px; font-size: 14px;">45 дней:</div>
							</td>
							<td>
								<div id="245" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">60 дней:</div>
							</td>
							<td>
								<div id="260" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">70 дней:</div>
							</td>
							<td>
								<div id="270" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">80 дней:</div>
							</td>
							<td>
								<div id="280" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">90 дней:</div>
							</td>
							<td>
								<div id="290" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">100 дней:</div>
							</td>
							<td>
								<div id="2100" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">110 дней:</div>
							</td>
							<td>
								<div id="2110" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">120 дней:</div>
							</td>
							<td>
								<div id="2120" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">130 дней:</div>
							</td>
							<td>
								<div id="2130" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">140 дней:</div>
							</td>
							<td>
								<div id="2140" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">150 дней:</div>
							</td>
							<td>
								<div id="2150" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
						<tr>
							<td>
								<div style="margin-top: 20px; font-size: 14px;">160 дней:</div>
							</td>
							<td>
								<div id="2160" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">170 дней:</div>
							</td>
							<td>
								<div id="2170" class="block5" style="margin-top: 20px;"></div>
							</td>
							<td>
								<div style="margin-top: 20px; margin-left: 10px; font-size: 14px;">180 дней:</div>
							</td>
							<td>
								<div id="2180" class="block5" style="margin-top: 20px;"></div>
							</td>
						</tr>
					</table>
					
					<table>
						<tr>
							<td>
								<div id="period_2" class="block6" style="margin-top: 20px;"></div>
							</td>
						<tr>
					</table>
				</div>
				<br>
				<div id="div_2_1" style="margin-left: 1%; margin-top: 220px; height: 5%; width: 95%;">
				
					<table id="table_2_1" cellspacing="0,05px" border="1" bordercolor="#877D7D">
						<tr>
							<td>
								<div id="date_2" class="block7" style="text-align: center; width: 100px;" >Дата</div>
							</td>
							<td>
								<div id="operation_2" class="block7" style="text-align: center; width: 240px;">Операция</div>
							</td>
							<td>
								<div id="otgruzka_2" class="block7" style="text-align: center; width: 100px;">Отгрузка</div>
							</td>
							<td>
								<div id="oplata_2" class="block7" style="text-align: center; width: 100px;">Оплата</div>
							</td>
						</tr>
					
					</table>
				</div>
				<div id="div_2" style="overflow-y: auto; overflow-x: hidden; margin-top: -2%; margin-left: 1%; height: 51%; width: auto;">
				
					<table id="table_2" cellspacing="0,05px" border="1" bordercolor="#877D7D"></table>
				
				</div>
						
			</div>
		</fieldset>	
	
	</body>
</html>