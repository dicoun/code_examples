<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

<table>
<tr>
<td width="50%" style="vertical-align: top;">
<div>
	<div id="currentDate"></div><br>
	<div id = "handle"><input id="checkbox_date" type="checkbox" onchange = 'showOrHide("checkbox_date", "today");'>Установить дату создания документа вручную<br></div>
	<div id = "today" style = "display: none;"><br><input type="date" id="date" style = "width: 150px;"></div>
	<!--<div id="today" style="margin-top: 20pt; display: none;">
	Число:
	<select id="date">
		<option>-- число --</option>
			
				/*for ($i=1;$i<10;$i++){
					echo "<option>0".$i."</option>";
				}
				for ($i=10;$i<32;$i++){
					echo "<option>".$i."</option>";
				}*/
			
	</select>
	Месяц:
	<select id="month">
	  <option>-- месяц --</option>
      <option>января</option>
	  <option>февраля</option>
	  <option>марта</option>
	  <option>апреля</option>
	  <option>мая</option>
	  <option>июня</option>
	  <option>июля</option>
	  <option>августа</option>
	  <option>сентября</option>
	  <option>октября</option>
	  <option>ноября</option>
	  <option>декабря</option>
    </select>
	Год:
	<select id="year">
		<option>-- год --</option>
			
				/*for ($i=2017;$i<2117;$i++){
					echo "<option>".$i."</option>";
				}*/
			
	</select>
  </div>-->
  <br>
  <div>
   Выберите организацию:
	<select id="org" onchange="onchangeOrgSelect();">
		<option id="organization" value="">-- организация не выбрана --</option>
	</select>
  </div><br>
  <div id="classCont" style="display: none;">
    Выберите вид документа:
    <select id="class" onchange="onchangeClassSelect(this);">
      <option value="">-- вид документа не выбран --</option>
    </select>
  </div>
  <div id="typeCont" style="display: none;">
  <br>
    Выберите тип документа:
    <select id="type" onchange="onchangeTypeSelect(this);">
      <option value="">-- тип документа не выбран --</option>
    </select>
  </div><br>

  <div id="fio_sotr">
	<div>Ф.И.О. в родительном падеже:</div>
	<input id="fio"	type="text" maxlength="40" style="width: 300px">
  </div>
  
  <div id = "fio_dir"><br>
	<input id="checkbox_dir" type="checkbox" onchange = 'showOrHide_2("checkbox_dir", "fio_io", "ioDir");'>Установить и.о. директора в случае его отсутствия<br>
	<div id="fio_io" style=" display: none;"><br>
		<div>Ф.И.О. и.о. директора:</div>
		<input id="ioDir" type="text" maxlength="40" style="width: 300px;">
	</div>
  </div>
  
  <div id = "fio_hunter"><br>
	<input id="checkbox_hr" type="checkbox" onchange = 'showOrHide_2("checkbox_hr", "fio_hr", "ioHR");'>Установить специалиста отдела кадров в случае отсутствия И.В.Зеликовой<br>
	<div id="fio_hr" style=" display: none;"><br>
		<div>Ф.И.О. специалиста отдела кадров:</div>
		<input id="ioHR" type="text" maxlength="40" style="width: 300px;">
	</div>
  </div>
  
  <br><hr>
   <div id="position" style="display: none;"><br>
	<div>Должность в родительном падеже:</div>
	<input id="pos" type="text" maxlength="40" style="width: 250px">
  </div>
  <div id="division" style="display: none;"><br>
	<div>Наименование подразделения:</div>
	<input id="div" type="text" maxlength="40" style="width: 250px">
  </div>
  <br>
  <div id="otpusk" style="display: none;"><div>Отпуск:</div><br></div>
  <div id = "fromtodateCont" style = "display: none;"><span>С: </span><input type="date" id="start" style = "width: 150px;"><span> По: </span><input type="date" id="end" style = "width: 150px;"></div>

  <div id="moving" style="display: none;">
	<div><br>
		<div>Подразделение, в которое перемещают:</div>
		<input id="to_department"	type="text" maxlength="40" style="width: 300px">
	</div><br>
	
	<div>
		<div>Режим рабочего времени:</div>
		<select id="mode">
			<option>-- ставка --</option>
			<option>1.0 ст.</option>
			<option>0.75 ст.</option>
			<option>0.5 ст.</option>
			<option>0.25 ст.</option>
		</select>
	</div><br>
	</div>
	
	<div id="surname_old" style="display: none;"><br>
		<div>Прежняя фамилия:</div>
		<input id="oldsurname" type="text" maxlength="20" style="width: 200px">
	</div>
	<div id="surname_new" style="display: none;"><br>
		<div>Новая фамилия:</div>
		<input id="newsurname" type="text" maxlength="20" style="width: 200px">
	</div>
	
	<div id="date_moving" style="display: none;"><br>
		C:
		<select id="from_date_moving">
			<option>-- число --</option>
			<?php
				for ($i=1;$i<10;$i++){
					echo "<option>0".$i."</option>";
				}
				for ($i=10;$i<32;$i++){
					echo "<option>".$i."</option>";
				}
			?>
		</select>
		<select id="from_month_moving">
			<option>-- месяц --</option>
		    <?php
				for ($i=1;$i<10;$i++){
					echo "<option>0".$i."</option>";
				}
				for ($i=10;$i<13;$i++){
					echo "<option>".$i."</option>";
				}
		    ?>
		</select>
		<select id="from_year_moving">
		<option>-- год --</option>
			<?php
				for ($i=2017;$i<2117;$i++){
					echo "<option>".$i."</option>";
				}
			?>
		</select>
	</div>
	<div id="checkbox" style="display: none;"><br>
		<input id="checkbox_free" type="checkbox">Неиспользованные дни отпуска (<input id="free_days"	type="text" maxlength="10" style="width: 50px"> к.дней) прошу предоставить позже по заявлению.<br>
		<input id="checkbox_paid" type="checkbox">За неиспользованные дни отпуска (<input id="paid_days"	type="text" maxlength="10" style="width: 50px"> к.дней) прошу выплатить денежную компенсацию.
	</div>
 
	<div id="perevod" style="display: none;">
		<div><br>
			<div>Новая должнасть:</div>
			<input id="pos_new" type="text" maxlength="20" style="width: 200px">
		</div><br>
		<div>
			<div>Новое подразделение:</div>
			<input id="div_new" type="text" maxlength="20" style="width: 200px">
		</div><br>
		<div>
			<div>Режим рабочего времени:</div>
			<select id="mode_new">
				<option>-- ставка --</option>
				<option>1.0 ст.</option>
				<option>0.75 ст.</option>
				<option>0.5 ст.</option>
				<option>0.25 ст.</option>
			</select>
		</div>
	</div>
	<div id="stavka" style="display: none;"><br>
			<div>Режим рабочего времени:</div>
			<select id="stav">
				<option>-- ставка --</option>
				<option>1.0 ст.</option>
				<option>0.75 ст.</option>
				<option>0.5 ст.</option>
				<option>0.25 ст.</option>
			</select>
	</div>
	<div id="vacation_days" style="display: none;"><br>
		<div>Количество календарных дней отпуска:</div>
		<input id="days_number" type="text" maxlength="20" style="width: 200px">
	</div>
	<div id="radio_workbook" style="display: none;">
		<input id="radio_firstwork" type="radio" name="radio">Трудоустройство на первое рабочее место<br>
		<input id="radio_loss" type="radio" name="radio">Утеря трудовой книжки<br>
		<input id="radio_lack" type="radio" name="radio">Отсутствие трудовой книжки образца Республики Беларусь<br>
	</div>
	
	<div id="address" style="display: none;"><br>
		<div>Адрес проживания:</div>
		<input id="addr" type="text" maxlength="40" style="width: 200px">
	</div>
	<div id="home_number" style="display: none;"><br>
		<div>Домашний номер телефона:</div>
		<input id="hnumber" type="text" maxlength="20" style="width: 200px">
	</div>
	<div id="mob_number" style="display: none;"><br>
		<div>Мобильный номер телефона:</div>
		<input id="mnumber" type="text" maxlength="20" style="width: 200px">
	</div>
	<div id="mat_help" style="display: none;"><br>
		<div>Причина оказания материальной помощи:</div>
		<textarea id="help" type="text" maxlength="400" rows="6" style="width: 400px;"></textarea>
	</div>
	
	<div id="fio_zam" style="display: none;"><br>
		<div>Ф.И.О. замещающего лица:</div>
		<input id="fio_zamena"	type="text" maxlength="40" style="width: 300px">
	</div>
	<div id="pos_zam" style="display: none;"><br>
		<div>Должность замещающего лица:</div>
		<input id="pos_zamena" type="text" maxlength="40" style="width: 200px">
	</div>
	
	<div id="month_dopl" style="display: none;">
		<div>Месяц, за который будет произведена доплата:</div>
		<select id="month_zamena_dopl">
			<option>-- месяц --</option>
			<option>январе</option>
			<option>феврале</option>
			<option>марте</option>
			<option>апреле</option>
			<option>мае</option>
			<option>июне</option>
			<option>июле</option>
			<option>августе</option>
			<option>сентябре</option>
			<option>октябре</option>
			<option>ноябре</option>
			<option>декабре</option>
		</select>
	</div>
	<div id="year_dopl" style="display: none;"><br>
		<div>Год, в котором будет произведена доплата:</div>
		<select id="year_zamena_dopl">
			<option>-- год --</option>
				<?php
					for ($i=2017;$i<2117;$i++){
						echo "<option>".$i."г.</option>";
					}
				?>
		</select>
	</div>
	<div id="fio_zam_dopl" style="display: none;"><br>
		<div>Ф.И.О. замещаемого лица:</div>
		<input id="fio_zamena_dopl"	type="text" maxlength="40" style="width: 300px">
	</div>
	<div id="pos_zam_dopl" style="display: none;"><br>
		<div>Должность замещаемого лица:</div>
		<input id="pos_zamena_dopl" type="text" maxlength="40" style="width: 200px">
	</div>
	<div id="sotr" style="display: none;"><br>
		<div>Сотрудники, которым будет произведена доплата:</div>
		<div id="sotr_dopl">
			<div id="div_1"><input id="1" type="text" maxlength="40" class="sotr" onFocus="setActive(this)"></div>
		</div><br>
		<button type="button" id="add" onclick="add();">Добавить сотрудника</button>
		<button type="button" id="add" onclick="del();">Удалить сотрудника</button>
	</div>
	<a id="link" href="kadru_docs/download.php" style="display: none;">Скачать лист по учету кадров</a>
	
  <br>
  <div id="buttons">
	<button type="button" id="generate_doc" onclick="generate_doc();">Сгенерировать документ</button>
	<button type="button" id="print" onclick="print_doc();">Распечатать документ</button>
  </div>
</div>
</td>
<td width="50%">
  <div id="frame" style="transform-origin: 0 0; transform: scale(0.9); margin-top: 20pt;"><iframe id="iframe" src="kadru_docs/doc.php" width="630" height="891" style="margin-left: auto; margin-right: auto;">Ваш браузер не поддерживает плавающие фреймы!</iframe></div>
</td>
</tr>
</table>  
</body>
</html>

<script>

//document.getElementById('iframe').onload = function() {hidden()};
document.getElementById('iframe').style.display = "none";

var Data = new Date();
var currentDate = Data.getDate();
var currMonth = Data.getMonth();
var currentYear = Data.getFullYear();
switch (currMonth)
	{
		case 0: currentMonth="января"; break;
		case 1: currentMonth="февраля"; break;
		case 2: currentMonth="марта"; break;
		case 3: currentMonth="апреля"; break;
		case 4: currentMonth="мае"; break;
		case 5: currentMonth="июня"; break;
		case 6: currentMonth="июля"; break;
		case 7: currentMonth="августа"; break;
		case 8: currentMonth="сентября"; break;
		case 9: currentMonth="октября"; break;
		case 10: currentMonth="ноября"; break;
		case 11: currentMonth="декабря"; break;
	}
document.getElementById('currentDate').innerHTML = "<div>Текущая дата: <b>"+currentDate+" "+currentMonth+" "+currentYear+" года</b></div>";


$(document).ready(function() {
	//alert("test");
	$.ajax({
                dataType: 'json',
                type: 'POST',
                url: 'kadru_docs/request.php',
               // data: {index:'test'},
                success: function(data){
					//alert(data);
					//document.getElementById('organization').innerHTML = data;
					//onchangeOrgSelect();
					document.getElementById('fio').value = data[0];
					document.getElementById('pos').value = data[1];
					document.getElementById('div').value = data[2];
				}
            });
});


/*function hidden(){
	var iframeDoc = document.getElementById('iframe').contentWindow.document; 
	iframeDoc.getElementById('dir').style.visibility = 'hidden';
	iframeDoc.getElementById('sogl').style.visibility = 'hidden';
	iframeDoc.getElementById('cherta_1').style.visibility = 'hidden';
	iframeDoc.getElementById('cherta_2').style.visibility = 'hidden';
	iframeDoc.getElementById('sign_1').style.visibility = 'hidden';
	iframeDoc.getElementById('sign_2').style.visibility = 'hidden';
}*/


var priceData = [ { "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Декретный отпуск", "p": "380" },   
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Матпомощь в связи с рождением ребенка", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "О перемещении в другое подразделение в прежней должности", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Отзыв из отпуска", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Перевод на должность", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Соц. отпуск", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Трудовой отпуск", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Увольнение по соглашению сторон", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "На трудовую книжку", "p": "380" }, 
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "О приеме по совместительству", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Матпомощь", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "Смена фамилии", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "ЗАЯВЛЕНИЕ", "type": "О приеме на работу", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "СЛУЖЕБНАЯ ЗАПИСКА", "type": "На И.О. заведующего аптекой", "p": "380" }, 
{ "org": "ОДО \"Фармин\"", "class": "СЛУЖЕБНАЯ ЗАПИСКА", "type": "О доплате за увеличенный объем работ", "p": "380" },
{ "org": "ОДО \"Фармин\"", "class": "Лист по учету кадров" },
{ "org": "ОДО \"Фармин\"", "class": "Перечень необходимых документов при приеме на работу" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Декретный отпуск", "p": "360"}, 
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Матпомощь в связи с рождением ребенка", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "О перемещении в другое подразделение в прежней должности", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Отзыв из отпуска", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Перевод на должность", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Соц. отпуск", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Трудовой отпуск", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Увольнение по соглашению сторон", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "На трудовую книжку", "p": "380" }, 
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "О приеме по совместительству", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Матпомощь", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "Смена фамилии", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "ЗАЯВЛЕНИЕ", "type": "О приеме на работу", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "СЛУЖЕБНАЯ ЗАПИСКА", "type": "На И.О. заведующего аптекой", "p": "380" }, 
{ "org": "ООО \"Не Ска\"", "class": "СЛУЖЕБНАЯ ЗАПИСКА", "type": "О доплате за увеличенный объем работ", "p": "380" },
{ "org": "ООО \"Не Ска\"", "class": "Лист по учету кадров" },
{ "org": "ООО \"Не Ска\"", "class": "Перечень необходимых документов при приеме на работу" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Декретный отпуск", "p": "360"}, 
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Матпомощь в связи с рождением ребенка", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "О перемещении в другое подразделение в прежней должности", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Отзыв из отпуска", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Перевод на должность", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Соц. отпуск", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Трудовой отпуск", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Увольнение по соглашению сторон", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "На трудовую книжку", "p": "380" }, 
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "О приеме по совместительству", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Матпомощь", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "Смена фамилии", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "ЗАЯВЛЕНИЕ", "type": "О приеме на работу", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "СЛУЖЕБНАЯ ЗАПИСКА", "type": "На И.О. заведующего аптекой", "p": "380" }, 
{ "org": "ООО \"Фитобел\"", "class": "СЛУЖЕБНАЯ ЗАПИСКА", "type": "О доплате за увеличенный объем работ", "p": "380" },
{ "org": "ООО \"Фитобел\"", "class": "Лист по учету кадров" },
{ "org": "ООО \"Фитобел\"", "class": "Перечень необходимых документов при приеме на работу" }
];

var ID = 1;


function firm_init() {
    var firmSelObj = document.getElementById('org');
    var priceLen = priceData.length;
    var selLen = firmSelObj.options.length;
    var lastFirm = "";
    for (var i=0; i < priceLen; i++) { 
		var t = priceData[i];
		if (lastFirm != t.org) { 
			firmSelObj.options[selLen ++] = new Option(t.org, t.org);
			lastFirm = t.org; 
			} 
		} 
	} 
	
function onchangeOrgSelect() { 
	var firmSelObj = document.getElementById('org'); 
	var classContainer = document.getElementById('classCont'); 
	var currentFirm = firmSelObj.value; 
	//iframe.style.display = "none";
	if (currentFirm == "") {
		classContainer.style.display = "none"; //бренд не выбран 
		} else { 
			var classSelObj = document.getElementById('class'); //очистим список моделей - все, кроме первого элемента 
			for (var i=classSelObj.options.length-1; i > 0; i--) {
				classSelObj.options[i] = null;
			}
			var typeSelObj = document.getElementById('type'); //очистим список моделей - все, кроме первого элемента 
			for (var i=typeSelObj.options.length-1; i > 0; i--) {
				typeSelObj.options[i] = null;
			}
        //загрузим список моделей соответствующего бренда
        var priceLen = priceData.length; //число строк прайса
        var selLen = classSelObj.options.length; //текущее число строк будет равно единице
		//var A = "";
		var lastClass = "";
        for (var i=0; i < priceLen; i++) {
            var t = priceData[i];
            if (currentFirm == t.org){	
				if(lastClass != t.class){
					//A = A + t.class + ";";
					classSelObj.options[selLen ++] = new Option(t.class, t.class);
					lastClass = t.class; 
				}
			}
		}
		
        classContainer.style.display = "block"; //бренд выбран, покажем список
    }
}

function onchangeClassSelect() { 
	//document.getElementById(start).value = '';
	//document.getElementById(end).value = '';
	fromtodateCont.style.display = "none";
	moving.style.display = "none";
	date_moving.style.display = "none";
	checkbox.style.display = "none";
	perevod.style.display = "none";
	vacation_days.style.display = "none";
	radio_workbook.style.display = "none";
	position.style.display ="none";
	division.style.display = "none";
	address.style.display = "none";
	home_number.style.display = "none";
	mob_number.style.display = "none";
	mat_help.style.display = "none";
	surname_old.style.display = "none";
	surname_new.style.display = "none";
	stavka.style.display = "none";
	otpusk.style.display = "none";
	fio_zam.style.display = "none";
	pos_zam.style.display = "none";
	month_dopl.style.display = "none";
	year_dopl.style.display = "none";
	fio_zam_dopl.style.display = "none";
	pos_zam_dopl.style.display = "none";
	sotr.style.display = "none";
	link.style.display = "none";
	buttons.style.display = "block";
	handle.style.display = "block";
	fio_dir.style.display = "block";
	fio_hunter.style.display = "block";
	//today.style.display = "block";
	//iframe.style.display = "none";
	
	var classSelObj = document.getElementById('class'); 
	var typeContainer = document.getElementById('typeCont');
	var firmSelObj = document.getElementById('org'); 
	var currentFirm = firmSelObj.value; 
	var currentClass = classSelObj.value; 
	if (currentClass == "" || currentClass == "Лист по учету кадров" || currentClass == "Перечень необходимых документов при приеме на работу") {
		typeContainer.style.display = "none"; //бренд не выбран
		handle.style.display = "none";
		today.style.display = "none";
		fio_io.style.display = "none";
		fio_sotr.style.display = "none";
		fio_dir.style.display = "none";
		fio_hunter.style.display = "none";
		} else { 
			var typeSelObj = document.getElementById('type'); //очистим список моделей - все, кроме первого элемента 
			for (var i=typeSelObj.options.length-1; i > 0; i--) {
				typeSelObj.options[i] = null;
			}
			if (checkbox_date.checked){
				today.style.display = "block";
			}
			if (checkbox_dir.checked){
				fio_io.style.display = "block";
			}
		fio_sotr.style.display = "block";
        //загрузим список моделей соответствующего бренда
        var priceLen = priceData.length; //число строк прайса
        var selLen = typeSelObj.options.length; //текущее число строк будет равно единице
		var lastType = "";
        for (var i=0; i < priceLen; i++) {
            var t = priceData[i];
			if (currentFirm == t.org){
				if (currentClass == t.class){
					if(lastType != t.type){
						typeSelObj.options[selLen ++] = new Option(t.type, t.type); //модель устройства (картридж), цена заправки в рублях
						lastType = t.type; 
					}
				}
			}
		}
        typeContainer.style.display = "block"; //бренд выбран, покажем список
    }
	if(currentClass == "Лист по учету кадров"){
		link.style.display = "block";
		buttons.style.display = "none";
	}
}


function onchangeTypeSelect(th) {
	//document.getElementById(start).value = '';
	//document.getElementById(end).value = '';
	fromtodateCont.style.display = "none";
	moving.style.display = "none";
	date_moving.style.display = "none";
	checkbox.style.display = "none";
	perevod.style.display = "none";
	vacation_days.style.display = "none";
	radio_workbook.style.display = "none";
	position.style.display ="none";
	division.style.display = "none";
	address.style.display = "none";
	home_number.style.display = "none";
	mob_number.style.display = "none";
	mat_help.style.display = "none";
	surname_old.style.display = "none";
	surname_new.style.display = "none";
	stavka.style.display = "none";
	otpusk.style.display = "none";
	fio_zam.style.display = "none";
	pos_zam.style.display = "none";
	month_dopl.style.display = "none";
	year_dopl.style.display = "none";
	fio_zam_dopl.style.display = "none";
	pos_zam_dopl.style.display = "none";
	sotr.style.display = "none";
	link.style.display = "none";
	buttons.style.display = "block";
	//iframe.style.display = "none";
	
	
    if (th.value == "Декретный отпуск" || th.value == "Соц. отпуск" || th.value == "Трудовой отпуск"){
        fromtodateCont.style.display = "block";
		position.style.display ="block";
		division.style.display = "block";
	}
	 if (th.value == "Матпомощь в связи с рождением ребенка"){
		position.style.display ="block";
		division.style.display = "block";
	}
	if (th.value == "О перемещении в другое подразделение в прежней должности"){
        moving.style.display = "block";
		date_moving.style.display = "block";
		position.style.display ="block";
		division.style.display = "block";
	}
	if (th.value == "Отзыв из отпуска"){
        date_moving.style.display = "block";
		checkbox.style.display = "block";
		position.style.display ="block";
		division.style.display = "block";
	}
	if (th.value == "Перевод на должность"){
        perevod.style.display = "block";
		position.style.display ="block";
		division.style.display = "block";
	}
	if (th.value == "Трудовой отпуск"){
        vacation_days.style.display = "block";
	}
	if (th.value == "Увольнение по соглашению сторон"){
        date_moving.style.display = "block";
		position.style.display ="block";
		division.style.display = "block";
	}
	if (th.value == "На трудовую книжку"){
        radio_workbook.style.display = "block";
		position.style.display ="none";
		division.style.display = "none";
		address.style.display = "block";
		home_number.style.display = "block";
		mob_number.style.display = "block";	
	}
	if (th.value == "О приеме по совместительству"){
		perevod.style.display = "block";
		date_moving.style.display = "block";
		position.style.display ="block";
		division.style.display = "block";
	}
	if (th.value == "Матпомощь"){
		position.style.display ="block";
		division.style.display = "block";
		mat_help.style.display = "block";
	}
	if (th.value == "Смена фамилии"){
		position.style.display ="block";
		division.style.display = "block";
		surname_old.style.display = "block";
		surname_new.style.display = "block";
		date_moving.style.display = "block";
	}
	if (th.value == "О приеме на работу"){
		position.style.display ="block";
		division.style.display = "block";
		address.style.display = "block";
		home_number.style.display = "block";
		mob_number.style.display = "block";	
		date_moving.style.display = "block";
		stavka.style.display = "block";
	}
	if (th.value == "На И.О. заведующего аптекой"){
		position.style.display ="block";
		division.style.display = "block";
		fio_zam.style.display = "block";
		pos_zam.style.display = "block";
		fromtodateCont.style.display = "block";
		otpusk.style.display = "block";
	}
	if (th.value == "О доплате за увеличенный объем работ"){
		position.style.display ="block";
		division.style.display = "block";
		month_dopl.style.display = "block";
		year_dopl.style.display = "block";
		fio_zam_dopl.style.display = "block";
		pos_zam_dopl.style.display = "block";	
		sotr.style.display = "block";
	}
}
 
firm_init();

function generate_doc(){
		
	var firmSelObj = document.getElementById('org');
	var currentFirm = firmSelObj.value; 
	var currentFIO =document.getElementById('fio').value;
	var currentPos =document.getElementById('pos').value;
	var currentDiv =document.getElementById('div').value;
	var currentClass =document.getElementById('class').value;
	var currentType =document.getElementById('type').value;
	
	
	var ioDir = document.getElementById('ioDir').value;
	var ioHR = document.getElementById('ioHR').value;
	
	if (checkbox_date.checked){
		var checkedDate = document.getElementById('date').value;
		var arr = checkedDate.split('-');
		var currentDate = arr[2];
		var currentMonth = arr[1];
		var arrMonth = currentMonth.split('0');
		currMonth = parseFloat(arrMonth[1]);
		var currentYear = arr[0];
		switch (currMonth)
		{
			case 1: currentMonth="января"; break;
			case 2: currentMonth="февраля"; break;
			case 3: currentMonth="марта"; break;
			case 4: currentMonth="апреля"; break;
			case 5: currentMonth="мае"; break;
			case 6: currentMonth="июня"; break;
			case 7: currentMonth="июля"; break;
			case 8: currentMonth="августа"; break;
			case 9: currentMonth="сентября"; break;
			case 10: currentMonth="октября"; break;
			case 11: currentMonth="ноября"; break;
			case 12: currentMonth="декабря"; break;
		}
		//alert(currentMonth);
		//var currentDate =document.getElementById('date').value;
		//var currentMonth =document.getElementById('month').value;
		//var currentYear =document.getElementById('year').value;
	}
	else{
		var Data = new Date();
		var currentDate = Data.getDate();
		var currMonth = Data.getMonth();
		var currentYear = Data.getFullYear();
		switch (currMonth)
		{
			case 0: currentMonth="января"; break;
			case 1: currentMonth="февраля"; break;
			case 2: currentMonth="марта"; break;
			case 3: currentMonth="апреля"; break;
			case 4: currentMonth="мае"; break;
			case 5: currentMonth="июня"; break;
			case 6: currentMonth="июля"; break;
			case 7: currentMonth="августа"; break;
			case 8: currentMonth="сентября"; break;
			case 9: currentMonth="октября"; break;
			case 10: currentMonth="ноября"; break;
			case 11: currentMonth="декабря"; break;
		}
		
	}
	/*===================Для формирования документа "Декретный отпуск"====================*/
	if(currentType == "Декретный отпуск"){
		var From =document.getElementById('start').value;
		var arr_2 = From.split('-');
		var FromDate = arr_2[2];
		var FromMonth = arr_2[1];
		var FromYear = arr_2[0];
		var To =document.getElementById('end').value;
		var arr_3 = To.split('-');
		var ToDate = arr_3[2];
		var ToMonth = arr_3[1];
		var ToYear = arr_3[0];
	}
	/*=========Для формирования документа "О перемещении в другое подразделение в прежней должности"=========*/
	if(currentType == "О перемещении в другое подразделение в прежней должности"){
		var ToDepartment = document.getElementById('to_department').value;
		var mode = document.getElementById('mode').value;
		var FromDateMoving =document.getElementById('from_date_moving').value;
		var FromMonthMoving =document.getElementById('from_month_moving').value;
		var FromYearMoving = document.getElementById('from_year_moving').value;
	}
	/*=========Для формирования документа "Отзыв из отпуска"=========*/
	if(currentType == "Отзыв из отпуска"){
		var CheckboxFree = document.getElementById('checkbox_free').checked;
		var CheckboxPaid = document.getElementById('checkbox_paid').checked;
		var FreeDays = document.getElementById('free_days').value;
		var PaidDays = document.getElementById('paid_days').value;
		var FromDateMoving =document.getElementById('from_date_moving').value;
		var FromMonthMoving =document.getElementById('from_month_moving').value;
		var FromYearMoving = document.getElementById('from_year_moving').value;
	}
	/*=========Для формирования документа "Перевод на должность"=========*/
	if(currentType == "Перевод на должность"){
		var newPos = document.getElementById('pos_new').value;
		var newDiv = document.getElementById('div_new').value;
		var newMode = document.getElementById('mode_new').value;
	}
	/*=========Для формирования документа "Соц. отпуск"=========*/
	if(currentType == "Соц. отпуск"){
		var From =document.getElementById('start').value;
		var arr_2 = From.split('-');
		var FromDate = arr_2[2];
		var FromMonth = arr_2[1];
		var FromYear = arr_2[0];
		var To =document.getElementById('end').value;
		var arr_3 = To.split('-');
		var ToDate = arr_3[2];
		var ToMonth = arr_3[1];
		var ToYear = arr_3[0];
	}
	/*=========Для формирования документа "Трудовой отпуск"=========*/
	if(currentType == "Трудовой отпуск"){
		var DaysNumber = document.getElementById('days_number').value;
		var From =document.getElementById('start').value;
		var arr_2 = From.split('-');
		var FromDate = arr_2[2];
		var FromMonth = arr_2[1];
		var FromYear = arr_2[0];
		var To =document.getElementById('end').value;
		var arr_3 = To.split('-');
		var ToDate = arr_3[2];
		var ToMonth = arr_3[1];
		var ToYear = arr_3[0];
	}
	/*=========Для формирования документа "Увольнение по соглашению сторон"=========*/
	if(currentType == "Увольнение по соглашению сторон"){
		var FromDateMoving =document.getElementById('from_date_moving').value;
		var FromMonthMoving =document.getElementById('from_month_moving').value;
		var FromYearMoving = document.getElementById('from_year_moving').value;
	}
	/*=========Для формирования документа "На трудовую книжку"=========*/
	if(currentType == "На трудовую книжку"){
		var Addr = document.getElementById('addr').value;
		var HomeNumber = document.getElementById('hnumber').value;
		var MobNumber = document.getElementById('mnumber').value;	
		var Radio = "";
		var RadioFirstWork = document.getElementById('radio_firstwork').checked;
		var RadioLoss = document.getElementById('radio_loss').checked;
		var RadioLack = document.getElementById('radio_lack').checked;
		if(RadioFirstWork == true){
			var Radio = "трудоустройства на первое рабочее место";
		}
		else{
			if(RadioLoss == true){
				var Radio = "утери трудовой книжки";
			}
			else{
				if(RadioLack == true){
					var Radio = "отсутствия трудовой книжки образца Республики Беларусь"; 
				}
				else{
					alert("Выберите причину выдачи бланка трудовой книжки.");
				}
			}
		}
	}
	/*=========Для формирования документа "О приеме по совместительству"=========*/
	if(currentType == "О приеме по совместительству"){
		var newPos = document.getElementById('pos_new').value;
		var newDiv = document.getElementById('div_new').value;
		var newMode = document.getElementById('mode_new').value;
		var FromDateMoving =document.getElementById('from_date_moving').value;
		var FromMonthMoving =document.getElementById('from_month_moving').value;
		var FromYearMoving = document.getElementById('from_year_moving').value;
	}
	/*=========Для формирования документа "Матпомощь"=========*/
	if(currentType == "Матпомощь"){
		var Help = document.getElementById('help').value;
	}
	/*=========Для формирования документа "Смена фамилии"=========*/
	if(currentType == "Смена фамилии"){
		var oldSurname = document.getElementById('oldsurname').value;
		var newSurname = document.getElementById('newsurname').value;
		var FromDateMoving =document.getElementById('from_date_moving').value;
		var FromMonthMoving =document.getElementById('from_month_moving').value;
		var FromYearMoving = document.getElementById('from_year_moving').value;
	}
	/*=========Для формирования документа "О приеме на работу"=========*/
	if(currentType == "О приеме на работу"){
		var Addr = document.getElementById('addr').value;
		var HomeNumber = document.getElementById('hnumber').value;
		var MobNumber = document.getElementById('mnumber').value;
		var FromDateMoving =document.getElementById('from_date_moving').value;
		var FromMonthMoving =document.getElementById('from_month_moving').value;
		var FromYearMoving = document.getElementById('from_year_moving').value;
		var Stavka = document.getElementById('stav').value;
	}
	/*=========Для формирования документа "На И.О. заведующего аптекой"=========*/
	if(currentType == "На И.О. заведующего аптекой"){
		var currentPos =document.getElementById('pos').value;
		var currentDiv =document.getElementById('div').value;
		var FIOZamena = document.getElementById('fio_zamena').value;
		var POSZamena = document.getElementById('pos_zamena').value;
		var From =document.getElementById('start').value;
		var arr_2 = From.split('-');
		var FromDate = arr_2[2];
		var FromMonth = arr_2[1];
		var FromYear = arr_2[0];
		var To =document.getElementById('end').value;
		var arr_3 = To.split('-');
		var ToDate = arr_3[2];
		var ToMonth = arr_3[1];
		var ToYear = arr_3[0];
	}
	/*=========Для формирования документа "О доплате за увеличенный объем работ"=========*/
	if(currentType == "О доплате за увеличенный объем работ"){
		var currentPos =document.getElementById('pos').value;
		var currentDiv =document.getElementById('div').value;
		var YearDopl =document.getElementById('year_zamena_dopl').value;
		var MonthDopl =document.getElementById('month_zamena_dopl').value; 
		var FIOZamenaDopl =document.getElementById('fio_zamena_dopl').value; 
		var POSZamenaDopl =document.getElementById('pos_zamena_dopl').value; 
		var Arr = new Array();
		for (var i=0; i < ID; i++) {
			var j = i+1;
			if(document.getElementById(j)){ 
			Arr[i] = document.getElementById(j).value;
			}
		}
		//alert(Arr);
	}
	
	
	if(currentClass != "Перечень необходимых документов при приеме на работу"){	
		var request = 'currentFirm=' +encodeURIComponent(currentFirm)+'&currentFIO='+encodeURIComponent(currentFIO)+'&currentPos='+encodeURIComponent(currentPos)+'&currentDiv='+encodeURIComponent(currentDiv)+'&currentClass='+encodeURIComponent(currentClass)+'&currentType='+encodeURIComponent(currentType)+'&FromDate='+encodeURIComponent(FromDate)+'&FromMonth='+encodeURIComponent(FromMonth)+'&FromYear='+encodeURIComponent(FromYear)+'&ToDate='+encodeURIComponent(ToDate)+'&ToMonth='+encodeURIComponent(ToMonth)+'&ToYear='+encodeURIComponent(ToYear)+'&currentDate='+encodeURIComponent(currentDate)+'&currentMonth='+encodeURIComponent(currentMonth)+'&currentYear='+encodeURIComponent(currentYear)+'&ToDepartment='+encodeURIComponent(ToDepartment)+'&mode='+encodeURIComponent(mode)+'&FromDateMoving='+encodeURIComponent(FromDateMoving)+'&FromMonthMoving='+encodeURIComponent(FromMonthMoving)+'&FromYearMoving='+encodeURIComponent(FromYearMoving)+'&CheckboxFree='+encodeURIComponent(CheckboxFree)+'&CheckboxPaid='+encodeURIComponent(CheckboxPaid)+'&FreeDays='+encodeURIComponent(FreeDays)+'&PaidDays='+encodeURIComponent(PaidDays)+'&newPos='+encodeURIComponent(newPos)+'&newDiv='+encodeURIComponent(newDiv)+'&newMode='+encodeURIComponent(newMode)+'&DaysNumber='+encodeURIComponent(DaysNumber)+'&Radio='+encodeURIComponent(Radio)+'&Addr='+encodeURIComponent(Addr)+'&HomeNumber='+encodeURIComponent(HomeNumber)+'&MobNumber='+encodeURIComponent(MobNumber)+'&Help='+encodeURIComponent(Help)+'&oldSurname='+encodeURIComponent(oldSurname)+'&newSurname='+encodeURIComponent(newSurname)+'&Stavka='+encodeURIComponent(Stavka)+'&FIOZamena='+encodeURIComponent(FIOZamena)+'&POSZamena='+encodeURIComponent(POSZamena)+'&MonthDopl='+encodeURIComponent(MonthDopl)+'&YearDopl='+encodeURIComponent(YearDopl)+'&FIOZamenaDopl='+encodeURIComponent(FIOZamenaDopl)+'&POSZamenaDopl='+encodeURIComponent(POSZamenaDopl)+'&Arr='+encodeURIComponent(Arr)+'&ioDir='+encodeURIComponent(ioDir)+'&ioHR='+encodeURIComponent(ioHR);
		document.getElementById('frame').innerHTML = '<iframe id="iframe" src="kadru_docs/doc.php?' + request + '" width="630" height="891" style="margin-left: auto; margin-right: auto; border: 1px solid black; border-style: dotted;" frameborder="0"></iframe>';
	}
	else{
		document.getElementById('frame').innerHTML = '<iframe id="iframe" src="kadru_docs/perechen.html" width="630" height="891" style="margin-left: auto; margin-right: auto; border: 1px solid black; border-style: dotted;" frameborder="0"></iframe>';
	}
}

function print_doc(){
	var iframe = document.getElementById('iframe'); 
    iframe.contentWindow.focus();
    iframe.contentWindow.print();
}

var _activeElement = null;

function setActive(e)
{
  _activeElement = e;
}

function add(){
	var newDiv = document.createElement('div');
	var newInput = document.createElement('input');
	ID = ID +1;
	var div = 'div_'+ID;
	newInput.className = "sotr";
	newInput.setAttribute('type', 'text');
	newInput.setAttribute('maxlength', '40');
	newInput.setAttribute('id', ID);
	newInput.setAttribute('onFocus', 'setActive(this)');
	newDiv.setAttribute('id', div);
	sotr_dopl.appendChild(newDiv);
	newDiv.appendChild(newInput);
}

function del(){
	_activeElement.remove();
}

function showOrHide(cb, cat) {
    cb = document.getElementById(cb);
    cat = document.getElementById(cat);
    if (cb.checked) cat.style.display = "block";
    else {
		cat.style.display = "none";
		document.getElementById(date).value = '';
	}
  }
  
function showOrHide_2(cb_2, cat_2, name) {
    cb = document.getElementById(cb_2);
    cat = document.getElementById(cat_2);
    if (cb.checked) cat.style.display = "block";
    else{
		cat.style.display = "none";
		document.getElementById(name).value = '';
	}
  }  
  

</script>