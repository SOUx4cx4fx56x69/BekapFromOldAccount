<html>
<head>
<title>PRELIMINARY BACKGROUND APPLICATION - Los Santos Police Department</title>
<meta charset=utf-8>
 <link rel="stylesheet" type="text/css" href="style.css">
<style>
#fix{
position:fixed;
color:#FF0000;
opacity:0.5;
}
.hid{
display:none;
}
#fix:hover{
opacity:1;}
#fix:hover .hid{
display:block;
}

</style>
</head>
<body>
<form action=form.php method=POST>
<div id=wrap>
<div id=fix><b>Приём заявок:</b><b class=hid>Открыто</b></div>
<div class="clear"></div>
<div class=content>

<div style="border: 1px solid black; padding: 15px; background-color: #1A283F;">
			<span>
			
				<div>
				
					</div>
				
					<br><hr><hr>﻿<div style="background-color:#f4f4f4; border:1px solid black; margin:10px 10px; padding-left: 5px; padding-right: 5px;">
						<span style="color: transparent"></span>
						<br>

						<span style="text-decoration: underline">
						<span style="font-weight: bold">
						<span style="font-size: 150%; line-height: 116%;">
						<span style="color: #000000">1. ПЕРСОНАЛЬНАЯ ИНФОРМАЦИЯ
						</span></span></span></span><br><br>
							<ul>
						<span style="font-size: 90%; line-height: 116%;">
								<span style="text-decoration: underline">(( IN CHARACTER ))</span><br><br>
							<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.01</span>
								</span> 
								<span style="font-weight: bold">ИМЯ</span>:
							</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;"><input placeholder="БОЛЬШИМИ БУКВАМИ" name="101" type="text"></td>
							</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr><td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.02</span>
								</span> 
								<span style="font-weight: bold">ВТОРОЕ ИМЯ</span>:</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;"><input placeholder="БОЛЬШИМИ БУКВАМИ" name="102" type="text"></td></tr>
							</tbody></table>
							<table width="100%">
							<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.03</span></span> 
								<span style="font-weight: bold">ФАМИЛИЯ</span>:</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;"><input placeholder="БОЛЬШИМИ БУКВАМИ" name="103" type="text">
								</td>
							</tr>
							</tbody></table>
							<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">1.04</span></span>
							<span style="font-weight: bold">ПОЛ</span>:
							</td><td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="104">
									<option selected="selected" value="-">---</option>
									<option value="М">М</option>
									<option value="Ж">Ж</option>
								</select>
							</td></tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold"><span style="text-decoration: underline">1.05</span></span>
								<span style="font-weight: bold">ВОЗРАСТ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;"><input id="age" placeholder="21" name="105" type="text"></td>
								</tr>
							</tbody></table>
							<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">1.06</span></span> 
<span style="font-weight: bold">ДАТА РОЖДЕНИЯ</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
																<select name='day'>
									<option selected="selected" value="--">День</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
																
									</select>

	<select name='month'>
									<option selected="selected" value="--">Месяц</option>
<option value="1">Январь</option>
<option value="2">Февраль</option>
<option value="3">Март</option>
<option value="4">Апрель</option>
<option value="5">Май</option>
<option value="6">Июнь</option>
<option value="7">Июль</option>
<option value="8">Август</option>
<option value="9">Сентябрь</option>
<option value="10">Октябрь</option>
<option value="11">Ноябрь</option>
<option value="12">Декабрь</option>

									</select>
<select name='year'>
									<option selected="selected" value="--">Год</option>

<option value="1971" SELECTED>1971</option>
<option value="1970">1970</option>
<option value="1969">1969</option>
<option value="1968">1968</option>
<option value="1967">1967</option>
<option value="1966">1966</option>
<option value="1965">1965</option>
<option value="1964">1964</option>
<option value="1963">1963</option>
<option value="1962">1962</option>
<option value="1961">1961</option>
<option value="1960">1960</option>
<option value="1959">1959</option>
<option value="1958">1958</option>
<option value="1957">1957</option>
<option value="1956">1956</option>
<option value="1955">1955</option>
<option value="1954">1954</option>
<option value="1953">1953</option>
<option value="1952">1952</option>
<option value="1951">1951</option>
<option value="1950">1950</option>
<option value="1949">1949</option>
<option value="1948">1948</option>
<option value="1947">1947</option>
<option value="1946">1946</option>
<option value="1945">1945</option>
<option value="1944">1944</option>
<option value="1943">1943</option>
<option value="1942">1942</option>
<option value="1941">1941</option>
<option value="1940">1940</option>
<option value="1939">1939</option>
<option value="1938">1938</option>
<option value="1937">1937</option>
<option value="1936">1936</option>
<option value="1935">1935</option>
<option value="1934">1934</option>
<option value="1933">1933</option>
<option value="1932">1932</option>
<option value="1931">1931</option>
<option value="1930">1930</option>
<option value="1929">1929</option>
<option value="1928">1928</option>
<option value="1927">1927</option>
<option value="1926">1926</option>
<option value="1925">1925</option>
<option value="1924">1924</option>
<option value="1923">1923</option>
<option value="1922">1922</option>
<option value="1921">1921</option>
<option value="1920">1920</option>
<option value="1919">1919</option>
<option value="1918">1918</option>
<option value="1917">1917</option>
<option value="1916">1916</option>
<option value="1915">1915</option>
<option value="1914">1914</option>
<option value="1913">1913</option>
<option value="1912">1912</option>
<option value="1911">1911</option>
<option value="1910">1910</option>
<option value="1909">1909</option>
<option value="1908">1908</option>
<option value="1907">1907</option>
<option value="1906">1906</option>
<option value="1905">1905</option>
<option value="1904">1904</option>
<option value="1903">1903</option>
<option value="1902">1902</option>
<option value="1901">1901</option>




									</select>

							</td>
							<td style="vertical-align: top; width:50%;">
							</td>
							</tr>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.07</span>
								</span> 
								<span style="font-weight: bold">РАСА</span>:</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
									<select size="1" name="107">
										<option selected="selected" value="Американоидная">Американоидная</option>
										<option value="Негроидная">Негроидная</option>
										<option value="Европеоидная">Европеоидная</option>
										<option value="Монголоидная">Монголоидная</option>
									</select>
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold"><span style="text-decoration: underline">1.08</span>
								</span>
								<span style="font-weight: bold">НАЦИОНАЛЬНОСТЬ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
									<select size="1" name="108">
									<option selected="selected" value="Американец">Американец</option>
									<option value="Итальянец">Итальянец</option>
									<option value="Испанец">Испанец</option>
									<option value="Китаец">Китаец</option>
									<option value="Немец">Немец</option>
									<option value="Русский">Русский</option>
									<option value="Француз">Француз</option>
									<option value="Японец">Японец</option>
									</select>
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.09</span>
								</span> 
								<span style="font-weight: bold">ГРАЖДАНСТВО</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
									<select size="1" name="109">
										<option selected="selected" value="США">США</option>
										<option value="ИНОЕ">ИНОЕ</option>
									</select>
								</td>
								</tr>
							</tbody></table>
							
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.10</span>
								</span> 
								<span style="font-weight: bold">МЕСТО РОЖДЕНИЯ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="113" placeholder="ШТАТ, ГОРОД, УЛИЦА, НОМЕР ДОМА" type="text">
								</td>
								</tr>
							</tbody></table>

							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.11</span>
								</span> 
								<span style="font-weight: bold">НОМЕР ТЕЛЕФОНА</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="110" placeholder="123-456 (12-345)" type="text">
								</td>
								</tr>
							</tbody></table>
							
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold"><span style="text-decoration: underline">1.12</span>
								</span> 
								<span style="font-weight: bold">РАБОЧИЙ НОМЕР</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="112" id="4" placeholder="123-456 (12-345)" type="text">
								</td>
								</tr>
							</tbody></table>

							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.13</span>
								</span> 
								<span style="font-weight: bold">МЕСТО ЖИТЕЛЬСТВА</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<textarea style="width:204px;" type="text" name="114" placeholder="ШТАТ, ГОРОД, УЛИЦА, НОМЕР ДОМА"></textarea>
								</td>
								</tr>
							</tbody></table>
						<br>
						<br>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.14.1</span>
								</span> 
								<span style="font-weight: bold">Есть ли у вас заболевания, психические или физические недостатки?</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
									<select size="1" name="1151">
										<option selected="selected" value="0">---</option>
										<option value="ДА">ДА</option>
										<option value="НЕТ">НЕТ</option>
									</select>
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.14.2</span>
								</span> 
								<span style="font-weight: bold">Если да, пожалуйста, перечислите их здесь</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<textarea style="width:204px; height:50px;" name="1152" placeholder="БОЛЬШИМИ БУКВАМИ"></textarea>
								</td>
								</tr>
							</tbody></table>
						<br>
						<br>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.15.1</span>
								</span> 
								<span style="font-weight: bold">УЧЕБНОЕ ЗАВЕДЕНИЕ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="1161" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.15.2</span>
								</span> 
								<span style="font-weight: bold">ВЫСШЕЕ ОБРАЗОВАНИЕ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
									<select style="width:210px;" size="1" name="1162">
										<option selected="selected" value="НЕТ">НЕТ</option>
										<option value="ВЫСШАЯ">ВЫСШАЯ ШКОЛА</option>
										<option value="ВЫПУСКНИК АКАДЕМИИ">ВЫПУСКНИК АКАДЕМИИ</option>
										<option value="БАКАЛАВР">СТЕПЕНЬ БАКАЛАВР</option>
										<option value="МАГИСТР">СТЕПЕНЬ МАГИСТР</option>
										<option value="КОЛЛЕДЖ/УНИВЕРСИТЕТ">КОЛЛЕДЖ/УНИВЕРСИТЕТ</option>
									</select>
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold"><span style="text-decoration: underline">1.15.3</span>
								</span> 
								<span style="font-weight: bold">Если же вы проходили обучение в колледжде/университете, то по какому курсу?
</span>
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select style="width:210px;" size="1" name="1182">
										<option selected="selected" value="НЕТ">НЕТ</option>
										<option value="Общий курс/нетематический ">Общий курс/нетематический </option>
										<option value="Бизнес/Экономика">Бизнес/Экономика</option>
										<option value="Коммуникации/радиосвязь">Коммуникации/радиосвязь</option>
										<option value="Психология/Социология">Психология/Социология</option>
										<option value="Криминальное право">Криминальное право</option>
										<option value="Научные исследования">Научные исследования</option>
										<option value="Гуманитарные науки">Гуманитарные науки</option>
										<option value="Другой курс">Другой курс</option>
</select>
<br>									
<input type=text name="1514" placeholder="Другой курс" />
								</td>
								</tr>
							</tbody></table>
						</span>
						</ul>
						<br>
						<hr>
						<hr>
						<br>
						<ul>
					<span style="font-size: 90%; line-height: 116%;">
							<span style="text-decoration: underline">(( OUT OF CHARACTER ))</span>
						<br>
						<br>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.17</span>
								</span> 
								<span style="font-weight: bold">ИМЯ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="116" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.18</span>
								</span> 
								<span style="font-weight: bold">ПОЛ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
									<select name="118">
										<option selected="selected" value="---">---</option>
										<option value="М">М</option>
										<option value="Ж">Ж</option>
									</select>
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.19</span>
								</span> 
								<span style="font-weight: bold">ОПЫТ ИГРЫ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="119" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.20</span>
								</span> 
								<span style="font-weight: bold">ВОЗРАСТ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="120" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.21</span>
								</span> 
								<span style="font-weight: bold">МЕСТО ЖИТЕЛЬСТВА</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="121" placeholder="СТРАНА, ГОРОД" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.22</span>
								</span> 
								<span style="font-weight: bold">ЧАСОВОЙ ПОЯС</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
									<select size="1" name="122">
										<option value="-12">-12</option>
										<option value="-11">-11</option>
										<option value="-10">-10</option>
										<option value="-9">-9</option>
										<option value="-8">-8</option>
										<option value="-6">-6</option>
										<option value="-6">-6</option>
										<option value="-5">-5</option>
										<option value="-4">-4</option>
										<option value="-3">-3</option>
										<option value="-2">-2</option>
										<option value="-1">-1</option>
										<option value="0">0</option>
										<option value="+1">+1</option>
										<option value="+2">+2</option>
										<option selected="selected" value="+3">+3</option>
										<option value="+4">+4</option>
										<option value="+5">+5</option>
										<option value="+6">+6</option>
										<option value="+6">+6</option>
										<option value="+8">+8</option>
										<option value="+9">+9</option>
										<option value="+10">+10</option>
										<option value="+11">+11</option>
										<option value="+12">+12</option>
										<option value="+13">+13</option>
										<option value="+14">+14</option>
									</select>
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.23</span></span>
								<span style="font-weight: bold">SKYPE</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="123" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.24</span>
								</span> 
								<span style="font-weight: bold">ВРЕМЯ ИГРЫ НА ПРОЕКТЕ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="124" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.25</span>
								</span> 
								<span style="font-weight: bold">ССЫЛКА НА ПРОФИЛЬ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="125" placeholder="(необязательно)" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.26</span>
								</span> 
								<span style="font-weight: bold">ССЫЛКА НА БИОГРАФИЮ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="126" placeholder="(необязательно)" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.27</span>
								</span> 
								<span style="font-weight: bold">ВРЕМЯ ИГРЫ В SAMP</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="127" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.28</span>
								</span> 
								<span style="font-weight: bold">НА КАКИХ SAMP СЕРВЕРАХ ИГРАЛИ ДО ЭТОГО</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<textarea style="width:204px" type="text" name="128"></textarea>
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.29</span>
								</span> 
								<span style="font-weight: bold">ВЫ МОЖЕТЕ БЫТЬ НА ЛЕКЦИЯХ ДО 3-Х ЧАСОВ</span>:
								</td><td style="vertical-align: top; width:50%; padding-left:10px;">
									<select name="129">
										<option selected="selected" value="-">---</option>
										<option value="ДА">ДА</option>
										<option value="НЕТ">НЕТ</option>
									</select>
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.30</span>
								</span> 
								<span style="font-weight: bold">ВСЕ ПРЕДЫДУЩИЕ ПЕРСОНАЖИ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="130" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.31</span>
								</span> 
								<span style="font-weight: bold">ВСЕ ПРЕДЫДУЩИЕ ФРАКЦИИ И РАНГ В НИХ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<input name="131" type="text">
								</td>
								</tr>
							</tbody></table>
							<table width="100%">
								<tbody><tr>
								<td style="vertical-align: top; width:50%; padding-right:10px;">
								<span style="font-weight: bold">
								<span style="text-decoration: underline">1.32</span>
								</span> 
								<span style="font-weight: bold">ДОПОЛНИТЕЛЬНЫЕ ПЕРСОНАЖИ В ИГРЕ</span>:
								</td>
								<td style="vertical-align: top; width:50%; padding-left:10px;">
								<textarea style="width:204px; height:100px;" name="132"></textarea>
								</td>
								</tr>
							</tbody></table>

						

							<span style="text-decoration: underline">(( SCREENSHOTS ))</span>
						<br>
						<br>
							<span style="font-weight: bold">
							<span style="text-decoration: underline">1.33.1</span>
							</span> 
							<span style="font-weight: bold">СКРИНШОТ СТАТИСТИКИ ПЕРСОНАЖА: 
							<br>
								<dd><input style="width:96%; height:29px;" name="135" placeholder="ВСТАВЬТЕ ССЫЛКУ: http://i.imgur.com/B5FcIac.jpg" type="text"></dd>
							</span> 
							<span style="font-weight: bold">							<span style="text-decoration: underline">1.33.2</span>
<span style="font-weight: bold">СКРИНШОТ ПАСПОРТА ПЕРСОНАЖА: 
							<br>
								<dd><input style="width:96%; height:29px;" name="passposrt" placeholder="ВСТАВЬТЕ ССЫЛКУ: http://i.imgur.com/B5FcIac.jpg" type="text"></dd>
							</span> 
							</ul>
					
				</div>
					<span style="color: transparent"></span>
					<br>
					<hr>
					<hr>
					<br>
					<div style="background-color:#f4f4f4; border:1px solid black; margin:10px 10px; padding-left: 5px; padding-right: 5px;">
					<span style="color: transparent"></span>
					<br>

						<span style="text-decoration: underline">
						<span style="font-weight: bold">
						<span style="font-size: 150%; line-height: 116%;">
						<span style="color: #000000">2. ВЛАДЕНИЯ ЯЗЫКОМ</span>
						</span>
						</span>
						</span>
					<br>
					<br>
					<ul>
						<span style="font-size: 90%; line-height: 116%;">
						<span style="text-decoration: underline">(( IN CHARACTER ))</span>
					<br>
					<br>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">2.1.1</span>
							</span> 
							<span style="font-weight: bold">Можете ли вы эффективно общаться на английском языке?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="211">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">2.2.2</span>
							</span> 
							<span style="font-weight: bold">Вы говорите на других языках кроме английского?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="222">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">2.2.3</span>
							</span> 
							<span style="font-weight: bold">Если да, пожалуйста, перечислите их здесь, а также уровень вашего владения иностранным языком</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<textarea style="width:204px; height:100px;" name="223"></textarea>
							</td>
							</tr>
						</tbody></table>
						<br>
						<br>
						<span style="text-decoration: underline">(( OUT OF CHARACTER ))</span>
					<br>
					<br>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">2.3</span>
							</span> 
							<span style="font-weight: bold">Можете ли вы эффективно общаться и писать на русском языке?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="23">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
							<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">2.4.1</span>
							</span> 
							<span style="font-weight: bold">Вы говорите на других языках кроме русского?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="241">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">2.4.2</span>
							</span> 
							<span style="font-weight: bold">Если да, пожалуйста, перечислите их здесь</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="242" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">2.5</span>
							</span> 
							<span style="font-weight: bold">Вы в состоянии эффективно функционировать в Teamspeak</span>?:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="25">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">2.6</span>
							</span>
							<span style="font-weight: bold"> У вас есть рабочий микрофон?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="26">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
					<br>
						<span style="color: transparent"></span>
					</span></ul></div>
					
					</span>
					<br>
					<hr>
					<hr>
					<br>
					<div style="background-color:#f4f4f4; border:1px solid black; margin:10px 10px; padding-left: 5px; padding-right: 5px;">
						<span style="color: transparent"></span>
					<br>
	
						<span style="text-decoration: underline">
						<span style="font-weight: bold">
						<span style="font-size: 150%; line-height: 116%;">
						<span style="color: #000000">3. ЛИЦЕНЗИИ И РАЗРЕШЕНИЯ</span>
						</span></span></span>
					<br>
					<br>
					<ul>
						<span style="font-size: 90%; line-height: 116%;">
						<span style="text-decoration: underline">(( IN CHARACTER ))</span>
					<br>
					<br>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">3.1.1</span>
							</span> 
							<span style="font-weight: bold">У вас есть водительские права?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="311">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
						<tbody><tr>
						<td style="vertical-align: top; width:50%; padding-right:10px;">
						<span style="font-weight: bold">
						<span style="text-decoration: underline">3.1.2</span>
						</span> 
						<span style="font-weight: bold">Если да, то у вас есть все категории водителя?</span>:
						</td><td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="312">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
						</td>
						</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">3.1.3</span>
							</span> 
							<span style="font-weight: bold">Были ли ваши водительские права когда-либо изъяты?</span>:
							</td><td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="313">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">3.1.4</span>
							</span> 
							<span style="font-weight: bold">У вас есть автомобиль, какой марки?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="314" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">3.1.5</span>
							</span> 
							<span style="font-weight: bold">Какой номер вашего автомобиля?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="315" placeholder="S228RP" type="text">
							</td>
							</tr>
						</tbody></table>
					<br>
					<br>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">3.2.1</span>
							</span> 
							<span style="font-weight: bold">У вас есть лицензия на управления авиацией?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="321">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
						<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">3.2.2</span>
							</span> 
							<span style="font-weight: bold">Была ли ваша авиационная лицензия когда-либо изъята?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
									<select name="322">
										<option selected="selected" value="-">---</option>
										<option value="ДА">ДА</option>
										<option value="НЕТ">НЕТ</option>
									</select>
							</td>
							</tr>
						</tbody></table>
					<br>
					<br>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">3.3.1</span>
							</span> 
							<span style="font-weight: bold">Вы имеете лицензию на огнестрельное оружие?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
<select name="GUN">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">3.3.2</span>
							</span> 
							<span style="font-weight: bold">Была ли ваша оружейная лицензия когда-либо изъята?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="332">
									<option selected="selected" value="---">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
					<br>
						<span style="color: transparent"></span>
					</span></ul></div>
					
					
					<br>
					<hr>
					<hr>
					<br>
					<div style="background-color:#f4f4f4; border:1px solid black; margin:10px 10px; padding-left: 5px; padding-right: 5px;">
						<span style="color: transparent"></span>
					<br>
	 
						<span style="text-decoration: underline">
						<span style="font-weight: bold">
						<span style="font-size: 150%; line-height: 116%;">
						<span style="color: #000000">4. ТРУДОВАЯ КНИЖКА</span>
						</span>
						</span>
						</span>
					<br>
					<br>
					<ul>
						<span style="font-size: 90%; line-height: 116%;">
						<span style="text-decoration: underline">(( IN CHARACTER ))</span>
					<br>
					<br>Трудовая книжка, история вашего нынешнего или предыдущего места
 работы, добровольные или выгодные цели. Количество полей, может быть 
увеличено, если это потребуется:
					</span></ul>
					<br>
					<blockquote class="uncited">
					<div>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Название компании</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="401" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Характер работы</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="402" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Причина увольнения</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="403" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Работодатель</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="404" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Должность</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="405" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
					</div>
					</blockquote>
					<br>
					<blockquote class="uncited">
					<div>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Название компании</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="406" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Характер работы</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="407" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Причина увольнения</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="408" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Работодатель</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="409" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
						<tbody><tr>
						<td style="vertical-align: top; width:50%; padding-right:10px;">
						<span style="font-weight: bold">Должность</span>:
						</td>
						<td style="vertical-align: top; width:50%; padding-left:10px;">
						<input name="410" placeholder="БОЛЬШИМИ БУКВАМИ" type="text">
						</td>
						</tr>
						</tbody></table>
					</div>
					</blockquote>
					<br>
						<span style="color: transparent"></span>
					</div>
						
					<br>
					<hr>
					<hr>
					<br>
				
					<div style="background-color:#f4f4f4; border:1px solid black; margin:10px 10px; padding-left: 5px; padding-right: 5px;">
						<span style="color: transparent"></span>
					<br>
	
						<span style="text-decoration: underline">
						<span style="font-weight: bold">
						<span style="font-size: 150%; line-height: 116%;">
						<span style="color: #000000">5. ОТЗЫВЫ И РЕКОМЕНДАЦИИ</span>
						</span>
						</span>
						</span>
					<br>
					<br>
					<ul>
						<span style="font-size: 90%; line-height: 116%;">
						<span style="text-decoration: underline">(( IN CHARACTER / OUT OF CHARACTER ))</span>
					<br>
					<br>Отзывы и рекомендации могут быть даны любым текущим сотрудником
 Департамента полиции и должны быть опубликованы ниже, соответственно, с
 реализацией дополнительных полей, если необходимо:
					</span></ul>
					<br>
					<blockquote class="uncited">
					<div>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Полное имя фамилия сотрудника</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="601" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Текущая должность \ звание сотрудника</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="602" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Личное дело сотрудника</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="603" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Отзыв или рекомендации сотрудника</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="604" type="text">
							</td>
							</tr>
						</tbody></table>
					<br>
					</div>
					</blockquote>
					<br>
					<blockquote class="uncited">
					<div>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Полное имя фамилия сотрудника</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="605" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Текущая должность \ звание сотрудника</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="606" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Личное дело сотрудника</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="666" type="text">
							</td>
							</tr>
						</tbody></table>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">Отзыв или рекомендации сотрудника</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
							<input name="608" type="text">
							</td>
							</tr>
						</tbody></table>
					<br>
					</div>
					</blockquote>
					<br>
						<span style="color: transparent"></span>
					</div>
					
					<br>
					<hr>
					<hr>
					<br>
					<div style="background-color:#f4f4f4; border:1px solid black; margin:10px 10px; padding-left: 5px; padding-right: 5px;">
						<span style="color: transparent"></span>
					<br>
	 
						<span style="text-decoration: underline">
						<span style="font-weight: bold">
						<span style="font-size: 150%; line-height: 116%;">
						<span style="color: #000000">6. ДЕКЛАРАЦИЯ АБИТУРИЕНТОВ</span>
						</span>
						</span>
						</span>
					<br>
					<br>
					<ul>
						<span style="font-size: 90%; line-height: 116%;">
						<span style="text-decoration: underline">(( IN CHARACTER ))</span>
					<br>
					<br>Я  подтверждаю и утверждаю то, что все в этом заявление 
является истинной и в этом заявление не присутствует ни капли лжи. Я так
 же подтверждаю и утверждаю, что заявление было заполнено мной 
самостоятельно без чужой помощи и без психического или физического 
давления со стороны других людей. Я понимаю, что не правдивая информация
 в данном заявление может стать причиной отклонения заявки и заведения 
уголовного дела.
					<br>
					<br>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">6.1</span>
							</span> 
							<span style="font-weight: bold">Вы понимаете и соглашаетесь с выше сказанным?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="61">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
					<br>
					<br>
						<span style="text-decoration: underline">(( OUT OF CHARACTER ))</span>
					<br>
					<br>Я соглашаюсь со всеми правилами и условиями полицейского 
департамента. Так же уверяю, что все данные мною ответы в этой заявки 
являются правдивыми и моя история наказаний от администрации - 
правдивая. Так же я не имею конфликтов с полицейским департаментом и не 
состою в черном списке полиции.
					<br>
					<br>И я согласен быть активным за аккаунт полицейского более 60%, чем за какие-либо еще аккаунты.
					<br>
					<br>
						<table width="100%">
							<tbody><tr>
							<td style="vertical-align: top; width:50%; padding-right:10px;">
							<span style="font-weight: bold">
							<span style="text-decoration: underline">6.2</span>
							</span> 
							<span style="font-weight: bold">Вы понимаете и соглашаетесь с выше сказанным?</span>:
							</td>
							<td style="vertical-align: top; width:50%; padding-left:10px;">
								<select name="62">
									<option selected="selected" value="-">---</option>
									<option value="ДА">ДА</option>
									<option value="НЕТ">НЕТ</option>
								</select>
							</td>
							</tr>
						</tbody></table>
					<br>
						<span style="color: transparent"></span>
					</span></ul>
						
					</div>
					<br>
					<hr>
					<hr>
					<br>
											<span style="color: transparent"></span>
	
					<div style="background-color:#f4f4f4; border:1px solid black; margin:10px 10px; padding-left: 5px; padding-right: 5px;">
						<span style="color: transparent"></span>
					<br>
	 
						<span style="text-decoration: underline">
						<span style="font-weight: bold">
						<span style="font-size: 150%; line-height: 116%;">
						<span style="color: #000000">7. JOB PREVIEW QUESTIONNAIRE</span>
						</span>
						</span>
						</span>
					<br>
					<br>
			        <blockquote class="uncited">
   <div>
      <table width="100%">
         <tbody>
            <tr>
               <td style="vertical-align: top; width:50%; padding-right:10px;"><span style="font-weight: bold">Как Вы считаете, какими качествами и умениями должен обладать Police Officer? </span></td>
               <td style="vertical-align: top; width:50%; padding-left:10px;"><textarea style="width:204px;" type="text" name="901"></textarea></td>
            </tr>
         </tbody>
      </table>
      <br>
      <table width="100%">
         <tbody>
            <tr>
               <td style="vertical-align: top; width:50%; padding-right:10px;"><span style="font-weight: bold">Как Вы думаете, какую работу выполняет Police Officer?</span></td>
               <td style="vertical-align: top; width:50%; padding-left:10px;"><textarea style="width:204px;" type="text" name="902"></textarea></td>
            </tr>
         </tbody>
      </table>
      <br>
      <table width="100%">
         <tbody>
            <tr>
               <td style="vertical-align: top; width:50%; padding-right:10px;"><span style="font-weight: bold">Как Вы считаете, какие сложности есть в работе Police Officer?</span></td>
               <td style="vertical-align: top; width:50%; padding-left:10px;"><textarea style="width:204px;" type="text" name="903"></textarea></td>
            </tr>
         </tbody>
      </table>
      
      <br>
      <table width="100%">
         <tbody>
            <tr>
               <td style="vertical-align: top; width:50%; padding-right:10px;"><span style="font-weight: bold">Представьте, что Вы стали Police Officer. Каковы будут Ваши обязанности? Что Вы будете делать на работе? </span></td>
               <td style="vertical-align: top; width:50%; padding-left:10px;"><textarea style="width:204px;" type="text" name="906"></textarea></td>
            </tr>
         </tbody>
      </table>
      <br>
   </div>
</blockquote>
<br>

			<span style="color: transparent"></span>
					
						
					</div>
					<br>
					<hr>
					<hr>
					<br>
					<div style="background-color:#f4f4f4; border:1px solid black; margin:10px 10px; padding-left: 5px; padding-right: 5px;">
						<span style="color: transparent"></span>
					<br>
	 
						<span style="text-decoration: underline">
						<span style="font-weight: bold">
						<span style="font-size: 150%; line-height: 116%;">
						<span style="color: #000000">8. (( ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ ИЛИ ПРОБЛЕМЫ ))</span>
						</span>
						</span>
						</span>
					<br>
					<br>
					<ul>
						<span style="font-size: 90%; line-height: 116%;">
						<span style="text-decoration: underline">(( OUT OF CHARACTER ))</span>
					<br>
						<span style="color: transparent"></span>
						<textarea style="width:96%; height:200px;" name="8"></textarea>
						<br>
					<br>						
					</span></ul></div>
					
						
					<br>
				
				<hr>
			<hr>
			
			
			<input style="width:100%;" value="Отправить!" type="submit">	
		</div>
</div>
</div>
</form>






</body>
</html>
