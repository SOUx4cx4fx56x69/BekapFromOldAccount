<html>
<head>
<head><meta charset=utf-8></head>
<style>
body{
width:50%;
height:50%;
padding:0 auto;
margin:0 auto;
overflow:scroll;
background:#40E0D0;
}
.clar{
overflow:scroll;
height:100%;
background:#708090;
}
</style>
</head>
<body>
<div class=clar>
<?php
$nameIC = $_POST['101']; // 1.01 ИМЯ: 
$nameIC = htmlspecialchars($nameIC);
$nameICtwo = $_POST['102']; //  1.02 ВТОРОЕ ИМЯ:
$nameICtwo = htmlspecialchars($nameICtwo);
$FamilyIC = $_POST['103']; //  1.03 ФАМИЛИЯ:
$FamilyIC = htmlspecialchars($FamilyIC);

$ageIC = $_POST['105']; //  1.05 ВОЗРАСТ: 
$ageIC = htmlspecialchars($ageIC);
$ICgender = $_POST['104'];// 1.04 ПОЛ:
$ICgender = htmlspecialchars($ICgender);
//data
$ICday = $_POST['day'];
$ICday = htmlspecialchars($ICday);
$ICmonth = $_POST['month'];  
$ICday = htmlspecialchars($ICmonth);
$ICyear = $_POST['year']; 
$ICyear = htmlspecialchars($ICyear);
//
$age = $_POST['105'];
$age = htmlspecialchars($age);
$rasa = $_POST['107']; //  1.07 РАСА:  
$rasa = htmlspecialchars($rasa);
$nacional = $_POST['108']; //   1.08 НАЦИОНАЛЬНОСТЬ:
$nacional= htmlspecialchars($nacional);  
$grashdanstvo = $_POST['109'];  //1.09 ГРАЖДАНСТВО:
$grashdanstvo = htmlspecialchars($grashdanstvo);  
$mestoroshdeniyIC = $_POST['113'];//  1.10 МЕСТО РОЖДЕНИЯ:
$mestoroshdeniyIC = htmlspecialchars($mestoroshdeniyIC); 
$a1 = $_POST['110']; //  1.11 НОМЕР ТЕЛЕФОНА: 
$a2 = $_POST['112'];  // 1.12 РАБОЧИЙ НОМЕР:
$a3 = $_POST['114']; //  1.13 МЕСТО ЖИТЕЛЬСТВА: 
$a4 = $_POST['1151']; //  1.14.1 Есть ли у вас заболевания, психические или физические недостатки?: 
$a5 = $_POST['1152']; //  1.14.2 Если да, пожалуйста, перечислите их здесь: 
$a6 = $_POST['1161']; //  1.15.1 УЧЕБНОЕ ЗАВЕДЕНИЕ: 
$a7 = $_POST['1162']; //   1.15.2 ВЫСШЕЕ ОБРАЗОВАНИЕ: 
$a8 = $_POST['1182']; //  1.15.3 Если же вы проходили обучение в колледжде/университете, то по какому курсу? 
$a9 = $_POST['1514']; // другой курс
$a10 = $_POST['116']; //  1.17 ИМЯ: 
$a11 = $_POST['118']; //  1.18 ПОЛ: 
$a12 = $_POST['119']; //  1.19 ОПЫТ ИГРЫ: 
$a13 = $_POST['120']; //  1.20 ВОЗРАСТ: 
$a14 = $_POST['121']; //  1.21 МЕСТО ЖИТЕЛЬСТВА: 
$a15 = $_POST['122']; //  1.22 ЧАСОВОЙ ПОЯС: 
$a16 = $_POST['123']; //  1.23 SKYPE: 
$a17 = $_POST['124']; //  1.24 ВРЕМЯ ИГРЫ НА ПРОЕКТЕ: 
$a18 = $_POST['125'];//  1.25 ССЫЛКА НА ПРОФИЛЬ: 
$a19 = $_POST['126']; //  1.26 ССЫЛКА НА БИОГРАФИЮ: 
$a20 = $_POST['127']; //  1.27 ВРЕМЯ ИГРЫ В SAMP: 
$a21 = $_POST['128']; //  1.28 НА КАКИХ SAMP СЕРВЕРАХ ИГРАЛИ ДО ЭТОГО: 
$a22 = $_POST['129']; //  1.29 ВЫ МОЖЕТЕ БЫТЬ НА ЛЕКЦИЯХ ДО 3-Х ЧАСОВ: 
$a23 = $_POST['130']; //  1.30 ВСЕ ПРЕДЫДУЩИЕ ПЕРСОНАЖИ: 
$a24 = $_POST['131']; //  1.31 ВСЕ ПРЕДЫДУЩИЕ ФРАКЦИИ И РАНГ В НИХ: 
$a25 = $_POST['132']; //  1.32 ДОПОЛНИТЕЛЬНЫЕ ПЕРСОНАЖИ В ИГРЕ: 
$a26 = $_POST['135']; //  1.33.1 СКРИНШОТ СТАТИСТИКИ ПЕРСОНАЖА: 
$a27 = $_POST['passposrt']; // 1.33.2 СКРИНШОТ ПАСПОРТА ПЕРСОНАЖА: 
//
$a28 = $_POST['211']; //  2.1.1 Можете ли вы эффективно общаться на английском языке?: 
$a29 = $_POST['222']; //  2.2.2 Вы говорите на других языках кроме английского?: 
$a30 = $_POST['223']; //  2.2.3 Если да, пожалуйста, перечислите их здесь, а также уровень вашего владения иностранным языком: 
$a31 = $_POST['23']; //  2.3 Можете ли вы эффективно общаться и писать на русском языке?: 
$a32 = $_POST['241']; //  2.4.1 Вы говорите на других языках кроме русского?: 
$a33 = $_POST['242']; //  2.4.2 Если да, пожалуйста, перечислите их здесь: 
$a34 = $_POST['25']; //  2.5 Вы в состоянии эффективно функционировать в Teamspeak?: 
$a35 = $_POST['26']; //  2.6 У вас есть рабочий микрофон?: 
$a36 = $_POST['311']; //  3.1.1 У вас есть водительские права?: 
$a37 = $_POST['312']; //  3.1.2 Если да, то у вас есть все категории водителя?: 
$a38 = $_POST['313']; //  3.1.3 Были ли ваши водительские права когда-либо изъяты?: 
$a39 = $_POST['314']; //  3.1.4 У вас есть автомобиль, какой марки?: 
$a40 = $_POST['315']; //  3.1.5 Какой номер вашего автомобиля?: 
$a41 = $_POST['321']; //  3.2.1 У вас есть лицензия на управления авиацией?: 
$a42 = $_POST['322']; //  3.2.2 Была ли ваша авиационная лицензия когда-либо изъята?: 
$a43 = $_POST['GUN']; //  3.3.1 Вы имеете лицензию на огнестрельное оружие?: 
$a44 = $_POST['332']; //  3.3.2 Была ли ваша оружейная лицензия когда-либо изъята?: 
// 4. ТРУДОВАЯ КНИЖКА 
$a45 = $_POST['401']; // 4  Название компании: 
$a46 = $_POST['402']; // 4  Характер работы: 
$a47 = $_POST['403']; //  Причина увольнения: 
$a48 = $_POST['404']; //  Работодатель: 
$a49 = $_POST['405']; //  Должность: 
$a50 = $_POST['406']; // 45x2
$a51 = $_POST['407']; // 46x2
$a52 = $_POST['408']; // 47x2
$a53 = $_POST['409']; // 48x2
$a54 = $_POST['410']; // 49x2
// 5. ОТЗЫВЫ И РЕКОМЕНДАЦИИ 
$a55 = $_POST['601']; // 1
$a56 = $_POST['602']; // 2
$a57 = $_POST['603']; // 3
$a58 = $_POST['604']; // 4
$a59 = $_POST['605']; // 5
$a60 = $_POST['606']; // 6
$a61 = $_POST['666']; // 7
$a62 = $_POST['608']; //8
// 6. ДЕКЛАРАЦИЯ АБИТУРИЕНТОВ 
$a63 = $_POST['61']; //1
$a64 = $_POST['62']; // 2
// 7. JOB PREVIEW QUESTIONNAIRE 
$a65 = $_POST['901']; // 1
$a66 = $_POST['902']; // 2
$a67 = $_POST['903']; // 3
$a68 = $_POST['906']; // 4
// 8. (( ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ ИЛИ ПРОБЛЕМЫ )) 
$a69 = $_POST['8']; //1
$a1 = htmlspecialchars($a1);
$a2 = htmlspecialchars($a2);
$a3 = htmlspecialchars($a3);
$a4 = htmlspecialchars($a4);
$a5 = htmlspecialchars($a5);
$a6 = htmlspecialchars($a6);
$a7 = htmlspecialchars($a7);
$a8 = htmlspecialchars($a8);
$a9 = htmlspecialchars($a9);
$a10 = htmlspecialchars($a10);
$a11 = htmlspecialchars($a11);
$a12 = htmlspecialchars($a12);
$a13 = htmlspecialchars($a13);
$a14 = htmlspecialchars($a14);
$a15 = htmlspecialchars($a15);
$a16 = htmlspecialchars($a16);
$a17 = htmlspecialchars($a17);
$a18 = htmlspecialchars($a18);
$a19 = htmlspecialchars($a19);
$a20 = htmlspecialchars($a20);
$a21 = htmlspecialchars($a21);
$a22 = htmlspecialchars($a22);
$a23 = htmlspecialchars($a23);
$a24 = htmlspecialchars($a24);
$a25 = htmlspecialchars($a25);
$a26 = htmlspecialchars($a26);
$a27 = htmlspecialchars($a27);
$a28 = htmlspecialchars($a28);
$a29 = htmlspecialchars($a29);
$a30 = htmlspecialchars($a30);
$a31 = htmlspecialchars($a31);
$a32 = htmlspecialchars($a32);
$a33 = htmlspecialchars($a33);
$a34 = htmlspecialchars($a34);
$a35 = htmlspecialchars($a35);
$a36 = htmlspecialchars($a36);
$a37 = htmlspecialchars($a37);
$a38 = htmlspecialchars($a38);
$a39 = htmlspecialchars($a39);
$a40 = htmlspecialchars($a40);
$a41 = htmlspecialchars($a41);
$a42 = htmlspecialchars($a42);
$a43 = htmlspecialchars($a43);
$a44 = htmlspecialchars($a44);
$a45 = htmlspecialchars($a45);
$a46 = htmlspecialchars($a46);
$a47 = htmlspecialchars($a47);
$a48 = htmlspecialchars($a48);
$a49 = htmlspecialchars($a49);
$a50 = htmlspecialchars($a50);
$a51 = htmlspecialchars($a51);
$a52 = htmlspecialchars($a52);
$a53 = htmlspecialchars($a53);
$a54 = htmlspecialchars($a54);
$a55 = htmlspecialchars($a55);
$a56 = htmlspecialchars($a56);
$a57 = htmlspecialchars($a57);
$a58 = htmlspecialchars($a58);
$a59 = htmlspecialchars($a59);
$a60 = htmlspecialchars($a60);
$a61 = htmlspecialchars($a61);
$a62 = htmlspecialchars($a62);
$a63 = htmlspecialchars($a63);
$a64 = htmlspecialchars($a64);
$a65 = htmlspecialchars($a65);
$a66 = htmlspecialchars($a66);
$a67 = htmlspecialchars($a67);
$a68 = htmlspecialchars($a68);
$a69 = htmlspecialchars($a69);
if(
empty($ICday)  
or empty($nameICtwo)
or   empty( $FamilyIC)
or   empty( $ageIC)
or  empty(  $rasa)
or   empty( $nacional)
or    empty($grashdanstvo)
or    empty($mestoroshdeniyIC)

)die ('Вы что-то не заполнили');
function bigxhuy($slovo){
if(strlen($slovo) > 500) return true;
}
if(
bigxhuy($ICday)  
or bigxhuy($nameICtwo)
or   bigxhuy( $FamilyIC)
or   bigxhuy( $ageIC)
or  bigxhuy(  $rasa)
or   bigxhuy( $nacional)
or    bigxhuy($grashdanstvo)
or    bigxhuy($mestoroshdeniyIC)
or bigxhuy($a0)
or  bigxhuy(  $a1)
or  bigxhuy(  $a2)
or    bigxhuy($a3)
or   bigxhuy( $a4)
or   bigxhuy( $a5)
or    bigxhuy($a6)
or    bigxhuy($a7)
or    bigxhuy($a8)
or    bigxhuy($a9)
or    bigxhuy($a10)    
or bigxhuy($a11)
or bigxhuy(   $a12)
or  bigxhuy( $a13)
or  bigxhuy(  $a14)
or   bigxhuy( $a15)
or  bigxhuy(  $a16)
or   bigxhuy( $a17)
or   bigxhuy( $a18)
or    bigxhuy($a19)
or    bigxhuy($a20)
or    bigxhuy($a21)
or    bigxhuy($a22)
or    bigxhuy($a23)
or   bigxhuy( $a24)
or   bigxhuy($a25)
or    bigxhuy($a26)
or   bigxhuy( $a27 ) 
or bigxhuy( $a28)
or  bigxhuy( $a29)
or   bigxhuy( $a30)
or    bigxhuy($a31)
or    bigxhuy($a32)
or    bigxhuy($a33)
or    bigxhuy($a34)
or   bigxhuy( $a35)
or   bigxhuy( $a36)
or   bigxhuy( $a37)
or   bigxhuy( $a38)
or   bigxhuy( $a39 )
or   bigxhuy($a40)
or   bigxhuy( $a41)
or  bigxhuy(  $a42 )
or  bigxhuy( $a43)
or  bigxhuy(  $a44)
or   bigxhuy( $a45)
or   bigxhuy( $a46 )
or   bigxhuy($a47)
or  bigxhuy(  $a48) 
or  bigxhuy( $a49)
or  bigxhuy(  $a50)
or  bigxhuy(  $a51)
or   bigxhuy( $a52)
or   bigxhuy( $a53)
or   bigxhuy( $a54)
or   bigxhuy( $a55)
or    bigxhuy($a56)
or   bigxhuy( $a57)
or   bigxhuy( $a58 )
or  bigxhuy($a59 )
or   bigxhuy($a60)
or   bigxhuy( $a61)
or   bigxhuy( $a62)
or   bigxhuy( $a63)
or   bigxhuy( $a64)
or   bigxhuy( $a65)
or   bigxhuy( $a66)
or   bigxhuy( $a67)
 or  bigxhuy( $a68 )
or  bigxhuy( $a69)
or  bigxhuy(  $a70)
or   bigxhuy( $a71 ) 

)die ('Вы что-то привысели на 500 символов');
echo "
[background=#1A283F][divbox=#f4f4f4][u][b][size=150][color=#000000]1. ПЕРСОНАЛЬНАЯ ИНФОРМАЦИЯ[/color][/size][/b][/u][list][size=90][u](( IN CHARACTER ))[/u] [coll][b][u]1.01[/u][/b] [b]ИМЯ[/b]:|".$nameIC."[/coll][coll][b][u]1.02[/u][/b] [b]ВТОРОЕ ИМЯ[/b]:|".$nameICtwo."[/coll][coll][b][u]1.03[/u][/b] [b]ФАМИЛИЯ[/b]:|".$FamilyIC."[/coll][coll][b][u]1.04[/u][/b] [b]ПОЛ[/b]:|".$ICgender."[/coll][coll][b][u]1.05[/u][/b] [b]ВОЗРАСТ[/b]:|".$ageIC."[/coll][coll][b][u]1.06[/u][/b] [b]ДАТА РОЖДЕНИЯ[/b]:|".$ICday.".".$ICmonth.".".$ICyear."[/coll][coll][b][u]1.07[/u][/b] [b]РАСА[/b]:|".$rasa."[/coll][coll][b][u]1.08[/u][/b] [b]НАЦИОНАЛЬНОСТЬ[/b]:|".$nacional."[/coll][coll][b][u]1.09[/u][/b] [b]ГРАЖДАНСТВО[/b]:|".$grashdanstvo."[/coll][coll][b][u]1.10[/u][/b] [b]МЕСТО РОЖДЕНИЯ[/b]:|".$mestoroshdeniyIC."[/coll][coll][u][b]1.11[/b][/u] [b]НОМЕР ТЕЛЕФОНА[/b]:|".$a1."[/coll][coll][b][u]1.12[/u][/b] [b]РАБОЧИЙ НОМЕР [/b]:|".$a2."[/coll][coll][b][u]1.13[/u][/b] [b]МЕСТО ЖИТЕЛЬСТВА[/b]:|".$a3."[/coll] [coll][b][u]1.14.1[/u][/b] [b]Есть ли у вас заболевания, психические или физические недостатки?[/b]:|".$a4."[/coll][coll][b][u]1.14.2[/u][/b] [b]Если да, пожалуйста, перечислите их здесь[/b]:|".$a5."[/coll] [coll][b][u]1.15.1[/u][/b] [b]УЧЕБНОЕ ЗАВЕДЕНИЕ[/b]:|".$a6."[/coll][coll][b][u]1.15.2[/u][/b] [b]ВЫСШЕЕ ОБРАЗОВАНИЕ[/b]:|".$a7."[/coll][coll][b][u]1.15.3[/u][/b] [b]Если же вы проходили обучение в колледжде/университете, то по какому курсу? [/b]:|".$a8."[/coll][coll][b][/b] [b]Другой курс. [/b]:|".$a9."[/coll][/size][/list]   [hr][/hr] [list][size=90][u](( OUT OF CHARACTER ))[/u] [coll][b][u]1.17[/u][/b] [b]ИМЯ[/b]:|".$a10."[/coll][coll][b][u]1.18[/u][/b] [b]ПОЛ[/b]:|".$a11."[/coll][coll][b][u]1.19[/u][/b] [b]ОПЫТ ИГРЫ[/b]:|".$a12."[/coll][coll][b][u]1.20[/u][/b] [b]ВОЗРАСТ[/b]:|".$a13."[/coll][coll][b][u]1.21[/u][/b] [b]МЕСТО ЖИТЕЛЬСТВА[/b]:|".$a14."[/coll][coll][b][u]1.22[/u][/b] [b]ЧАСОВОЙ ПОЯС[/b]:|".$a15."[/coll][coll][b][u]1.23[/u][/b] [b]SKYPE[/b]:|".$a16."[/coll][coll][b][u]1.24[/u][/b] [b]ВРЕМЯ ИГРЫ НА ПРОЕКТЕ[/b]:|".$a17."[/coll][coll][b][u]1.25[/u][/b] [b]ССЫЛКА НА ПРОФИЛЬ[/b]:|[url=http://".$a18."]".$a18."[/url][/coll][coll][b][u]1.26[/u][/b] [b]ССЫЛКА НА БИОГРАФИЮ[/b]:|[url=http://".$a19."]".$a19."[/url][/coll][coll][b][u]1.27[/u][/b] [b]ВРЕМЯ ИГРЫ В SAMP[/b]:|".$a20."[/coll][coll][b][u]1.28[/u][/b] [b]НА КАКИХ SAMP СЕРВЕРАХ ИГРАЛИ ДО ЭТОГО[/b]:|".$a21."[/coll][coll][b][u]1.29[/u][/b] [b]ВЫ МОЖЕТЕ БЫТЬ НА ЛЕКЦИЯХ ДО 3-Х ЧАСОВ[/b]:|".$a22."[/coll][coll][b][u]1.30[/u][/b] [b]ВСЕ ПРЕДЫДУЩИЕ ПЕРСОНАЖИ[/b]:|".$a23."[/coll][coll][b][u]1.31[/u][/b] [b]ВСЕ ПРЕДЫДУЩИЕ ФРАКЦИИ И РАНГ В НИХ[/b]:|".$a24."[/coll][coll][b][u]1.32[/u][/b] [b]ДОПОЛНИТЕЛЬНЫЕ ПЕРСОНАЖИ В ИГРЕ[/b]:|".$a25."[/coll] [u](( SCREENSHOTS ))[/u][hr][/hr] [b][u]1.33.1[/u][/b] [b]СКРИНШОТ СТАТИСТИКИ   ВАШЕГО ПЕРСОНАЖА[/b][img]".$a26."[/img][hr][/hr][b][u]1.33.1[/u][/b] [b]СКРИНШОТ ПАСПОРТА ПЕРСОНАЖА:  [/b] [img]".$a27."[/img][/list][/size][/divbox]   [hr][/hr] [divbox=#f4f4f4][u][b][size=150][color=#000000]2. ВЛАДЕНИЯ ЯЗЫКОМ[/color][/size][/b][/u] [list][size=90][u](( IN CHARACTER ))[/u] [coll][b][u]2.1.1[/u][/b] [b]Можете ли вы эффективно общаться на английском языке?[/b]:|".$a28."[/coll][coll][b][u]2.2.2[/u][/b] [b]Вы говорите на других языках кроме английского?[/b]:|".$a29."[/coll][coll][b][u]2.2.3[/u][/b] [b]Если да, пожалуйста, перечислите их здесь, а также уровень вашего владения иностранным языком[/b]:|".$a30."[/coll] [u](( OUT OF CHARACTER ))[/u] [coll][b][u]2.3[/u][/b] [b]Можете ли вы эффективно общаться и писать на русском языке?[/b]:|".$a31."[/coll][coll][b][u]2.4.1[/u][/b] [b]Вы говорите на других языках кроме русского?[/b]:|".$a32."[/coll][coll][b][u]2.4.2[/u][/b] [b]Если да, пожалуйста, перечислите их здесь[/b]:|".$a33."[/coll][coll][b][u]2.5[/u][/b] [b]Вы в состоянии эффективно функционировать в Teamspeak[/b]?:|".$a34."[/coll][coll][b][u]2.6[/u][/b][b] У вас есть рабочий микрофон?[/b]:|".$a35."[/coll][/divbox][/list][/size]   [hr][/hr] [divbox=#f4f4f4][u][b][size=150][color=#000000]3. ЛИЦЕНЗИИ И РАЗРЕШЕНИЯ[/color][/size][/b][/u] [list][size=90][u](( IN CHARACTER ))[/u] [coll][b][u]3.1.1[/u][/b] [b]У вас есть водительские права?[/b]:|".$a36."[/coll][coll][b][u]3.1.2[/u][/b] [b]Если да, то у вас есть все категории водителя?[/b]:|".$a37."[/coll][coll][b][u]3.1.3[/u][/b] [b]Были ли ваши водительские права когда-либо изъяты?[/b]:|".$a38."[/coll][coll][b][u]3.1.4[/u][/b] [b]У вас есть автомобиль, какой марки?[/b]:|".$a39."[/coll][coll][b][u]3.1.5[/u][/b] [b]Какой номер вашего автомобиля?[/b]:|".$a40."[/coll] [coll][b][u]3.2.1[/u][/b] [b]У вас есть лицензия на управления авиацией?[/b]:|".$a41."[/coll][coll][b][u]3.2.2[/u][/b] [b]Была ли ваша авиационная лицензия когда-либо изъята?[/b]:|".$a42."[/coll] [coll][b][u]3.3.1[/u][/b] [b]Вы имеете лицензию на огнестрельное оружие? Если да, укажите ее номер[/b]:|".$a43."[/coll][coll][b][u]3.3.2[/u][/b] [b]Была ли ваша оружейная лицензия когда-либо изъята?[/b]:|".$a44."[/coll][/divbox][/list][/size]   [hr][/hr] [divbox=#f4f4f4][u][b][size=150][color=#000000]4. ТРУДОВАЯ КНИЖКА[/color][/size][/b][/u] [list][size=90][u](( IN CHARACTER ))[/u] Трудовая книжка, история вашего нынешнего или предыдущего места работы, добровольные или выгодные цели:[/list] [quote][coll][b]Название компании[/b]:|".$a45."[/coll][coll][b]Характер работы[/b]:|".$a46."[/coll][coll][b]Причина увольнения[/b]:|".$a47."[/coll][coll][b]Работодатель[/b]:|".$a48."[/coll][coll][b]Должность[/b]:|".$a49."[/coll][/quote] [quote][coll][b]Название компании[/b]:|".$a50."[/coll][coll][b]Характер работы[/b]:|".$a51."[/coll][coll][b]Причина увольнения[/b]:|".$a52."[/coll][coll][b]Работодатель[/b]:|".$a53."[/coll][coll][b]Должность[/b]:|".$a54."[/coll][/quote][/divbox][/size]   [hr][/hr] [divbox=#f4f4f4][u][b][size=150][color=#000000]5. ОТЗЫВЫ И РЕКОМЕНДАЦИИ[/color][/size][/b][/u] [list][size=90][u](( IN CHARACTER / OUT OF CHARACTER ))[/u] Отзывы и рекомендации могут быть даны любым текущим сотрудником Департамента полиции и должны быть опубликованы ниже, соответственно, с реализацией дополнительных полей, если необходимо:[/list] [quote] [coll][b]Полное имя фамилия сотрудника[/b]:|".$a55."[/coll][coll][b]Текущая должность \ звание сотрудника[/b]:|".$a56."[/coll][coll][b]Личное дело сотрудника[/b]:|".$a57."[/coll][coll][b]Отзыв или рекомендации сотрудника[/b]:|".$a58."[/coll] [/quote] [quote] [coll][b]Полное имя фамилия сотрудника[/b]:|".$a59."[/coll][coll][b]Текущая должность \ звание сотрудника[/b]:|".$a60."[/coll][coll][b]Личное дело сотрудника[/b]:|".$a61."[/coll][coll][b]Отзыв или рекомендации сотрудника[/b]:|".$a62."[/coll] [/quote][/divbox][/size]   [hr][/hr] [divbox=#f4f4f4][u][b][size=150][color=#000000]6. ДЕКЛАРАЦИЯ АБИТУРИЕНТОВ[/color][/size][/b][/u] [list][size=90][u](( IN CHARACTER ))[/u] Я ".$nameIC." ".$FamilyIC.", подтверждаю и утверждаю то, что все в этом заявление является истинной и в этом заявление не присутствует ни капли лжи. Я так же подтверждаю и утверждаю, что заявление было заполнено мной самостоятельно без чужой помощи и без психического или физического давления со стороны других людей. Я понимаю, что не правдивая информация в данном заявление может стать причиной отклонения заявки и заведения уголовного дела. [coll][b][u]6.1[/u][/b] [b]Вы понимаете и соглашаетесь с выше сказанным?[/b]:|".$a63."[/coll] [u](( OUT OF CHARACTER ))[/u] ".$nameIC." ".$FamilyIC.", соглашаюсь со всеми правилами и условиями полицейского департамента. Так же уверяю, что все данные мною ответы в этой заявки являются правдивыми и моя история наказаний от администрации - правдивая. Так же я не имею конфликтов с полицейским департаментом и не состою в черном списке полиции. И я согласен быть активным за аккаунт полицейского более 60%, чем за какие-либо еще аккаунты. [coll][b][u]6.2[/u][/b] [b]Вы понимаете и соглашаетесь с выше сказанным?[/b]:|".$a64."[/coll] [/list][/size][/divbox]   [hr][/hr] [divbox=#f4f4f4][u][b][size=150][color=#000000]7. JOB PREVIEW QUESTIONNAIRE[/color][/size][/b][/u] [list][size=90][u](( IN CHARACTER )) [/list] [quote] [coll][b]Как Вы считаете, какими качествами и умениями должен обладать Police Officer? [/b]|".$a65."[/coll] [coll][b]Как Вы думаете, какую работу выполняет Police Officer?[/b]|".$a66."[/coll] [coll][b]Как Вы считаете, какие сложности есть в работе Police Officer?[/b]|".$a67."[/coll] [coll][b]Представьте, что Вы стали Police Officer. Каковы будут Ваши обязанности? Что Вы будете делать на работе? [/b]|".$a68."[/coll] [/quote] [/size][/divbox]   [hr][/hr] [divbox=#f4f4f4][b][size=150][color=#000000]8. (( ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ ИЛИ ПРОБЛЕМЫ ))[/color][/size][/b][/u] [list][size=90][u](( OUT OF CHARACTER ))[/u][hr][/hr]".$a69."[/divbox][/list][/size]   [hr][/hr][/background]
";



