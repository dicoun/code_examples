
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body bgcolor="white">


<table width="100%" height="40%">
	<tr>
		<td width="417pt" height="100pt"></td>
		<td valign="top">
			<?php
				if($_GET['ioDir'] != ""){
					echo '<div id="dir" class="left text" style="margin-top: 18pt; margin-left: 4pt; visibility: visible;">И.о. директора</div>';
				}
				else{
					echo '<div id="dir" class="left text" style="margin-top: 18pt; margin-left: 4pt; visibility: visible;">Директору</div>';
				}
			?>
			<div id="firm" class="left text" style="margin-left: 4pt;">
				<?php 
					if (isset($_GET['currentFirm'])){
						echo $_GET['currentFirm'];
					}
				?>
			</div>
			<div id="director" class="left text" style="margin-left: 4pt;">
				<?php
				if (isset($_GET['currentFirm'])){
					if($_GET['currentFirm'] == "ОДО \"Фармин\""){
						if($_GET['ioDir'] != ""){
							echo $_GET['ioDir'];
						}
						else{
							echo "Ясновскому И.А.";
						}
					}
					if($_GET['currentFirm'] == "ООО \"Не Ска\""){
						if($_GET['ioDir'] != ""){
							echo $_GET['ioDir'];
						}
						else{
							echo "Шевченко Е.В.";
						}
					}
					if($_GET['currentFirm'] == "ООО \"Фитобел\""){
						if($_GET['ioDir'] != ""){
							echo $_GET['ioDir'];
						}
						else{
							echo "Антуху В.О.";
						}
					}
				}
				?>
			</div>
			<div id="FIO" class="left text" style="margin-left: 4pt;">
				<?php 
					if (isset($_GET['currentFIO'])){
						echo $_GET['currentFIO'];
					}
				?>
			</div>
			<div id="position" class="left text" style="margin-left: 4pt;">
				<?php 
				if (isset($_GET['currentType'])){
					if($_GET['currentType'] != "На трудовую книжку"){
						if($_GET['currentType'] != "О приеме на работу"){
							if (isset($_GET['currentPos'])){
								echo $_GET['currentPos']."<br>";
							}
						}
					}
					if($_GET['currentType'] == "На трудовую книжку" || $_GET['currentType'] == "О приеме на работу"){
						if (isset($_GET['Addr'])){
							echo $_GET['Addr']."<br>";
						}
						if (isset($_GET['MobNumber'])){
							echo $_GET['MobNumber']."<br>";
						}
						if (isset($_GET['HomeNumber'])){
							echo $_GET['HomeNumber'];
						}
					}
				}
				?>
			</div>
		</td>
	</tr>
	<tr>
		<td valign="top" height="10pt"><div id="vid_doc" class="text" style="margin-top: 30pt; margin-left: 40pt;">
			<?php 
				if (isset($_GET['currentClass'])){
					echo $_GET['currentClass'];
				}
			?>
		</div></td>
		<td valign="top"><div id="division" class="left text" style="margin-top: 30pt;">
			<?php 
			if (isset($_GET['currentType'])){
					if($_GET['currentType'] != "На трудовую книжку"){
						if($_GET['currentType'] != "О приеме на работу"){
							if (isset($_GET['currentDiv'])){
								echo $_GET['currentDiv'];
							}
						}
					}
			}
			?>
		</div></td>
	</tr>
	<tr>
		<td colspan="2" valign="top" height="10pt"><div id="text" class="text" style="margin-top: 33pt; margin-left: 40pt; margin-right: 19pt;">
			<?php 
				if (isset($_GET['currentType'])){
					if($_GET['currentType'] == "Декретный отпуск"){
						echo "<p>Прошу предоставить социальный отпуск по уходу за ребенком до достижения им 3-х летнего возраста c ".$_GET['FromDate'].".".$_GET['FromMonth'].".".$_GET['FromYear']." по ".$_GET['ToDate'].".".$_GET['ToMonth'].".".$_GET['ToYear'].".</p>";
					}
					if($_GET['currentType'] == "Матпомощь в связи с рождением ребенка"){
						echo "<p>Прошу оказать материальную помощь по  случаю рождения ребенка. Копия свидетельства о рождении ребенка прилагается.</p>";
					}
					if($_GET['currentType'] == "О перемещении в другое подразделение в прежней должности"){
						echo "<p>Прошу переместить в ".$_GET['ToDepartment']." в режиме ".$_GET['mode']." в прежней должности ".$_GET['currentPos']." c ".$_GET['FromDateMoving'].".".$_GET['FromMonthMoving'].".".$_GET['FromYearMoving'].".</p>";
					}
					if($_GET['currentType'] == "Отзыв из отпуска"){
						echo "<p>Согласна(ен)  на отзыв из отпуска по производственной необходимости c ".$_GET['FromDateMoving'].".".$_GET['FromMonthMoving'].".".$_GET['FromYearMoving'].".</p>";
						if($_GET['CheckboxFree'] == "true"){
							if ($_GET['FreeDays'] == 1 || $_GET['FreeDays'] == 21 || $_GET['FreeDays'] == 31){
								echo "<p>Неиспользованные дни отпуска (".$_GET['FreeDays']." к.день) прошу предоставить позже по заявлению.</p>";
							}
							if (($_GET['FreeDays'] > 1 and $_GET['FreeDays'] < 5) || ($_GET['FreeDays'] > 21 and $_GET['FreeDays'] < 25) || ($_GET['FreeDays'] > 31 and $_GET['FreeDays'] < 35)){
								echo "<p>Неиспользованные дни отпуска (".$_GET['FreeDays']." к.дня) прошу предоставить позже по заявлению.</p>";
							}
							if (($_GET['FreeDays'] >=5 and $_GET['FreeDays'] <=20) || ($_GET['FreeDays'] >=25 and $_GET['FreeDays'] <=30) || $_GET['FreeDays'] >=35){
								echo "<p>Неиспользованные дни отпуска (".$_GET['FreeDays']." к.дней) прошу предоставить позже по заявлению.</p>";
							}
						}
						if($_GET['CheckboxPaid'] == "true"){
							if ($_GET['PaidDays'] == 1 || $_GET['PaidDays'] == 21 || $_GET['PaidDays'] == 31){
								echo "<p>За неиспользованные дни отпуска (".$_GET['PaidDays']." к.день) прошу выплатить денежную компенсацию.</p>";
							}
							if (($_GET['PaidDays'] > 1 and $_GET['PaidDays'] < 5) || ($_GET['PaidDays'] > 21 and $_GET['PaidDays'] < 25) || ($_GET['PaidDays'] > 31 and $_GET['PaidDays'] < 35)){
								echo "<p>За неиспользованные дни отпуска (".$_GET['PaidDays']." к.дня) прошу выплатить денежную компенсацию.</p>";
							}
							if (($_GET['PaidDays'] >=5 and $_GET['PaidDays'] <=20) || ($_GET['PaidDays'] >=25 and $_GET['PaidDays'] <=30) || $_GET['PaidDays'] >=35){
								echo "<p>За неиспользованные дни отпуска (".$_GET['PaidDays']." к.дней) прошу выплатить денежную компенсацию.</p>";
							}
						}
					}
					if($_GET['currentType'] == "Перевод на должность"){
						echo "<p>Прошу перевести на должность ".$_GET['newPos']." в ".$_GET['newDiv']." в режиме ".$_GET['newMode']."</p>";
					}
					if($_GET['currentType'] == "Соц. отпуск"){
						echo "<p>Прошу предоставить социальный отпуск без сохранения заработной платы по семейно-бытовым причинам с ".$_GET['FromDate'].".".$_GET['FromMonth'].".".$_GET['FromYear']." по ".$_GET['ToDate'].".".$_GET['ToMonth'].".".$_GET['ToYear'].".</p>";
					}
					if($_GET['currentType'] == "Трудовой отпуск"){
						echo "<p>Прошу предоставить трудовой отпуск на ".$_GET['DaysNumber'];
						if ($_GET['DaysNumber'] == 1 || $_GET['DaysNumber'] == 21 || $_GET['DaysNumber'] == 31){
							echo " календарный день с ".$_GET['FromDate'].".".$_GET['FromMonth'].".".$_GET['FromYear']." по ".$_GET['ToDate'].".".$_GET['ToMonth'].".".$_GET['ToYear'].".</p>";
						} 
						if (($_GET['DaysNumber'] > 1 and $_GET['DaysNumber'] < 5) || ($_GET['DaysNumber'] > 21 and $_GET['DaysNumber'] < 25) || ($_GET['DaysNumber'] > 31 and $_GET['DaysNumber'] < 35)){
							echo " календарных дня с ".$_GET['FromDate'].".".$_GET['FromMonth'].".".$_GET['FromYear']." по ".$_GET['ToDate'].".".$_GET['ToMonth'].".".$_GET['ToYear'].".</p>";
						} 
						if (($_GET['DaysNumber'] >=5 and $_GET['DaysNumber'] <=20) || ($_GET['DaysNumber'] >=25 and $_GET['DaysNumber'] <=30) || $_GET['DaysNumber'] >=35){
							echo " календарных дней с ".$_GET['FromDate'].".".$_GET['FromMonth'].".".$_GET['FromYear']." по ".$_GET['ToDate'].".".$_GET['ToMonth'].".".$_GET['ToYear'].".</p>";
						} 		
					}
					if($_GET['currentType'] == "Увольнение по соглашению сторон"){
						echo "<p>Прошу уволить по соглашению сторон c ".$_GET['FromDateMoving'].".".$_GET['FromMonthMoving'].".".$_GET['FromYearMoving'].".</p>";
					}
					if($_GET['currentType'] == "На трудовую книжку"){
						if($_GET['Radio'] != ""){
							echo "<p>Прошу выдать бланк трудовой книжки по причине ".$_GET['Radio']." и удержать его стоимость из моей заработной платы.</p>";
						}
					}
					if($_GET['currentType'] == "О приеме по совместительству"){
						echo "<p>Прошу разрешить работу по совместительству в должности ".$_GET['newPos']." c ".$_GET['FromDateMoving'].".".$_GET['FromMonthMoving'].".".$_GET['FromYearMoving']." в ".$_GET['newDiv']." в режиме  неполного рабочего времени ".$_GET['newMode']."</p>";
					}
					if($_GET['currentType'] == "Матпомощь"){
						echo "<p>Прошу  оказать материальную помощь по случаю ".$_GET['Help'].".</p><p>Копию документа прилагаю.</p>";
					}
					if($_GET['currentType'] == "Смена фамилии"){
						echo "<p>Прошу  провести изменения паспортных данных в кадровых документах по случаю изменения фамилии «".$_GET['oldSurname']."» на «".$_GET['newSurname']."» с ".$_GET['FromDateMoving'].".".$_GET['FromMonthMoving'].".".$_GET['FromYearMoving'].".</p><p>Копия паспорта прилагается.</p>";
					}
					if($_GET['currentType'] == "О приеме на работу"){
						echo "<p>Прошу принять на работу в должности ".$_GET['currentPos']." c ".$_GET['FromDateMoving'].".".$_GET['FromMonthMoving'].".".$_GET['FromYearMoving']." в ".$_GET['currentDiv']." в режиме ".$_GET['Stavka']."</p>";
					}
					if($_GET['currentType'] == "На И.О. заведующего аптекой"){
						echo "<p>Прошу возложить обязанности заведующего аптекой с правом подписания документов на время моего трудового отпуска c ".$_GET['FromDate'].".".$_GET['FromMonth'].".".$_GET['FromYear']." по ".$_GET['ToDate'].".".$_GET['ToMonth'].".".$_GET['ToYear']." на ".$_GET['FIOZamena'].", ".$_GET['POSZamena'].", с доплатой за фактическое исполнение обязанностей.</p>";
					}
					if($_GET['currentType'] == "О доплате за увеличенный объем работ"){
						echo "<p>Прошу установить доплату в ".$_GET['MonthDopl']." ".$_GET['YearDopl']." за увеличенный объем выполняемой работы в связи с отсутствием по причине болезни ".$_GET['FIOZamenaDopl'].", ".$_GET['POSZamenaDopl'].", следующим сотрудникам:</p>";
						$Str = $_GET['Arr'];
						$Arr = explode(",", $Str);
						$length = count($Arr);
						for($i=0; $i<$length; $i++){
							if($Arr[$i]!=""){
								$NewArr[]=$Arr[$i];
							}
						}
						if(isset($NewArr)){
							$newlength = count($NewArr);
							for ($j=0; $j<$newlength; $j++){
								echo "<p>".($j+1).". ".$NewArr[$j]."</p>";
							}
						}
					}
				}
			?>
		</div></td>
	</tr>
</table>
<table width="100%" height="60%">
	<tr>
		<td valign="top" width="275pt">
			<div id="date_doc" class="text" style="margin-left: 40pt; margin-top: 27pt;">
				<?php 
					if (isset($_GET['currentDate'])){
						echo "«".$_GET['currentDate']."» ".$_GET['currentMonth']." ".$_GET['currentYear']." г.";
					}
				?>
			</div>
			
			<div id="sogl" class="text" style="margin-left: 40pt; margin-top: 15pt;">
				<?php
					if(isset($_GET['currentType'])){
						if($_GET['currentType'] == "Матпомощь" || $_GET['currentType'] == "Смена фамилии"){
							if($_GET['currentFirm'] == "ОДО \"Фармин\""){
								echo "Согласовано:";
							}
						}
						else {
							if($_GET['currentType'] != "На И.О. заведующего аптекой" ){
								if($_GET['currentType'] != "О доплате за увеличенный объем работ"){
									echo "Согласовано:";
								}
							}
						}
					}		
				?>
			</div>
			<?php
				if(isset($_GET['currentType'])){ 
					if(($_GET['currentType'] == "Матпомощь" || $_GET['currentType'] == "Смена фамилии") && $_GET['currentFirm'] == "ОДО \"Фармин\""){
						echo '<div class="text" style="margin-left: 40pt; margin-top: 15pt;">Руководитель подразделения</div>';
						echo '<div class="text" style="margin-left: 40pt; margin-top: 15pt;">_____________/_____________</div>';
					}
				if($_GET['currentType'] == "О приеме на работу"){
						echo '<div class="text" style="margin-left: 40pt; margin-top: 5pt;">Руководитель подразделения</div>';
						echo '<div class="text" style="margin-left: 40pt; margin-top: 15pt;">_____________/_____________</div>';
						echo '<div class="text" style="margin-left: 40pt; margin-top: 20pt;">Ответственный за ОТ и ТБ</div>';
						echo '<div class="text" style="margin-left: 40pt; margin-top: 15pt;">_____________/_____________</div>';
					}
				}
			?>
		</td>
		<td valign="top" height="70pt" width="331pt" class="right">
			<div style="margin-left: 30pt;">
			<table>
				<tr>
					<td>
						<div id="cherta_1" class="text" style="margin-top: 22pt;">_______________/</div>
					</td>
					<td>
						<div id="cherta_2" class="text" style="margin-top: 22pt;">______________</div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="sign_1"  style="font-size: 11pt; margin-left: 30pt;">(подпись)</div>
					</td>
					<td>
						<div id="sign_2"  style="font-size: 11pt; margin-left: 20pt;">(Фамилия И.О.)</div>
					</td>
				</tr>
			</table>
			</div>
		</td>
	</tr>
	<!--<tr><td colspan="2" valign="top" height="300pt"><div class="text" style="margin-left: 40pt;">Согласовано:</div></td></tr>-->
	<tr>
		<?php 
			if (isset($_GET['currentFirm'])){
				if ($_GET['currentFirm'] == "ОДО \"Фармин\""){
					if($_GET['currentType'] == "Матпомощь" || $_GET['currentType'] == "Смена фамилии" || $_GET['currentType'] == "О приеме на работу"){
						if($_GET['ioHR'] == ""){
							echo "<td valign='bottom'><div id='farmfooter_left' class='footer' style='margin-bottom: 37pt; margin-left: 40pt;'><i>Специалист по кадрам<br>_____________И.В.Зеликова</i></div></td>";
							echo "<td valign='bottom'><div id='farmfooter_right' class='footer right' style='margin-bottom: 37pt; margin-right: 22pt;'><i>Пр. № _____ от __________</i></div></td>";
						}
						else{
							echo "<td valign='bottom'><div id='farmfooter_left' class='footer' style='margin-bottom: 37pt; margin-left: 40pt;'><i>Специалист по кадрам<br>_____________".$_GET['ioHR']."</i></div></td>";
							echo "<td valign='bottom'><div id='farmfooter_right' class='footer right' style='margin-bottom: 37pt; margin-right: 22pt;'><i>Пр. № _____ от __________</i></div></td>";
						}
						
					}
					else{
						if($_GET['ioHR'] == ""){
							echo "<td valign='bottom'><div id='farmfooter_left' class='footer' style='margin-bottom: 37pt; margin-left: 40pt;'>Ведущий специалист<br>по кадрам ____________И.В.Зеликова</div></td>";
							echo "<td valign='bottom'><div id='farmfooter_right' class='footer right' style='margin-bottom: 37pt; margin-right: 22pt;'>Приказ №______от _________</div></td>";
						}
						else{
							echo "<td valign='bottom'><div id='farmfooter_left' class='footer' style='margin-bottom: 37pt; margin-left: 40pt;'>Ведущий специалист<br>по кадрам ____________".$_GET['ioHR']."</div></td>";
							echo "<td valign='bottom'><div id='farmfooter_right' class='footer right' style='margin-bottom: 37pt; margin-right: 22pt;'>Приказ №______от _________</div></td>";
						}
						
					}
				}
			}
		?>
		
		
	</tr>
</table>

</body>
</html>