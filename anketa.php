<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8"><Title>Кредитование</Title>
<style type="text/css">
    body { background-color:
 #fff; border-top: solid 10px #000;
 color: #333; font-size: .85em;
 margin: 20; padding: 20;
 font-family: "Segoe UI",
 Verdana, Helvetica, Sans-Serif;
    }
    h1, h2, h3,{ color: #000;
margin-bottom: 0; padding-bottom: 0; }
    h1 { font-size: 2em; }
    h2 { font-size: 1.75em; }
    h3 { font-size: 1.2em; }
    table { margin-top: 0.75em; }
    th { font-size: 1.2em;
 text-align: left; border: none; padding-left: 0; }
    td { padding: 0.25em 2em 0.25em 0em;
border: 0 none; }
</style>
</head>
<body>
<h1>Заполнение анкеты</h1>
<p>Заполните анкету и нажмите на кнопку <b>Результат</b> для проверки заявки.</p>
<form method="post" action="anketa.php">
Пол <select name="pol">
  <option value ="0">Муж</option>
  <option value ="1">Жен</option>
</select></br>
Возраст <select name="age">
  <option value ="1">20-30 лет</option>
  <option value ="2">31-45 лет</option>
  <option value ="1">46-60 лет </option>
</select></br>
Семейное положение <select name="sp">
  <option value ="1">женат (замужем)</option>
  <option value ="1">не женат (не замужем)</option>
  <option value ="0">разведен(а)</option>
</select></br>
Образование <select name="educat">
  <option value ="0">среднее</option>
  <option value ="1">техническое</option>
  <option value ="2">высшее</option>
</select></br>
Работа <select name="work">
  <option value ="0">собственное дело</option>
  <option value ="2">работа по найму</option>
  <option value ="1">работа в бюджетной сфере</option>
</select></br>
Должность <select name="dolj">
  <option value ="3">топ-менеджер</option>
  <option value ="2">руководитель </option>
  <option value ="1">служащий</option>
</select></br>
Среднемесячный доход <select name="sel">
  <option value ="0">до $1000</option>
  <option value ="3">$1000 - 2000</option>
  <option value ="5">$2000 - 3000</option>
  <option value ="6">больше $3000</option>
</select></br>
Прочие источники дохода <select name="prsel">
  <option value ="3">ценные бумаги</option>
  <option value ="2">вклады </option>
  <option value ="1">прочие доходы</option>
  <option value ="0">нет</option>
</select></br>
Наличие собственности <select name="prop">
  <option value ="3">квартира</option>
  <option value ="2">дом, дача</option>
  <option value ="2">автомобиль</option>
  <option value ="0">нет</option>
</select></br>
Стоимость приобретаемой квартиры <input type="text"
name="hom" id="hom"/></br>
Срок кредита  <select name="srok">
  <option value ="4">1-3 года</option>
  <option value ="2">4-6 лет</option>
  <option value ="3">7-10 лет</option>
  <option value ="1">11-15 лет</option>
</select></br>
Начальный капитал <input type="text" name="nachkap" id="name"/></br>
<input type="submit" name="submit" value="Результат"/>
</form>
</body>
</html>

<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:pinyasova.database.windows.net,1433; Database = Progr", "Valera", "Hswfhmlyz08");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}



if (isset($_POST['submit'])) {

 $familiya = $_POST['familiya'];
 $name = $_POST['name'];
 $otchestvo = $_POST['otchestvo'];
 $birthday = $_POST['birthday'];
 $inn = $_POST['inn'];
 $telefon = $_POST['telefon'];
 $adres = $_POST['adres'];
 $seria = $_POST['seria'];
 $nomerp = $_POST['nomerp'];
 $kem = $_POST['kem'];
 $data = $_POST['data'];
 $kodp = $_POST['kodp'];
 $pol = $_POST['pol'];
 $age = $_POST['age'];
 $sp = $_POST['sp'];
 $educat = $_POST['educat'];
 $work = $_POST['work'];
 $dolj = $_POST['dolj'];
 $sel = $_POST['sel'];
 $prsel = $_POST['prsel'];
 $prop = $_POST['prop'];
 $hom = $_POST['hom'];
 $srok = $_POST['srok'];
 $nachkap = $_POST['nachkap'];

   // Insert data
  $sql_insert = "INSERT INTO klient_tbl (familiya,name,otchestvo, birthday, inn, telefon,adres, seria,nomerp,kem,data,kodp,pol,age,sp,educat,work,dolj,sel,prsel,prop,hom,srok,nachkap)
  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
 $stmt = $conn->prepare($sql_insert);
 $stmt->bindValue(1, $familiya);
 $stmt->bindValue(2, $name);
 $stmt->bindValue(3, $otchestvo);
 $stmt->bindValue(4, $birthday);
 $stmt->bindValue(5, $inn);
 $stmt->bindValue(6, $telefon);
 $stmt->bindValue(7, $adres);
 $stmt->bindValue(8, $seria);
 $stmt->bindValue(9, $nomerp);
 $stmt->bindValue(10, $kem);
 $stmt->bindValue(11, $data);
 $stmt->bindValue(12, $kodp);
 $stmt->bindValue(13, $pol);
 $stmt->bindValue(14, $age);
 $stmt->bindValue(15, $sp);
 $stmt->bindValue(16, $educat);
 $stmt->bindValue(17, $work);
 $stmt->bindValue(18, $dolj);
 $stmt->bindValue(19, $sel);
 $stmt->bindValue(20, $prsel);
 $stmt->bindValue(21, $prop);
 $stmt->bindValue(22, $hom);
 $stmt->bindValue(23, $srok);
 $stmt->bindValue(24, $nachkap);
 $stmt->execute();
  
 $a = (int) $_POST['pol']; 
 $b = (int) $_POST['age']; 
 $c = (int) $_POST['sp']; 
 $d = (int) $_POST['educat']; 
 $e = (int) $_POST['work']; 
 $f = (int) $_POST['dolj']; 
 $g = (int) $_POST['sel']; 
 $p = (int) $_POST['prsel']; 
 $m = (int) $_POST['prop']; 
 $n = (int) $_POST['srok']; 
 $x1 = ($a+$b+$c+$d); 
 $x2 = ($e+$f+$g+$p);
 $sum= ($x1*0.15+$x2*0.3+$m*0.25);
  
If ($sum>3 && $sum=3)
{echo "Ваша заявка одобрена!"}
 else if ($sum<3)
 {echo "Ваша заявка не одобрена!"}
}

?>
