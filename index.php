<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
<Title>Кредитование</Title>
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
    <h1>Оформление заявки</h1>
    <p>Введите свои данные и перейдите по кнопке<strong> "Далее" </strong> .</p>
<form method="post" action="anketa.php">
  Фамилия  <input type="text" name="familiya" id="familiya" required/></br>
  Имя  <input type="text" name="name" id="name" required/></br>
  Отчество  <input type="text" name="otchestvo" id="otchestvo" required/></br>
  Дата рождения <input type="date" pattern="[0-9]{2}.[0-9]{2}.[0-9]{4}" name="birthday" required/></br>
  ИНН  <input type="text" name="inn" id="inn"/></br>
  Номер телефона <input type="text" name="telefon" id="telefon" required/>
  Адрес  <input type="text" name="adres" id="adres" required/></br>
  Серия  <input type="text" name="seria" id="seria" required/></br>
  Номер  <input type="text" name="nomerp" id="nomerp" required/></br>
  Кем выдан  <input type="text" name="kem" id="kem" required/></br>
  Дата выдачи  <input type="date" pattern="[0-9]{2}.[0-9]{2}.[0-9]{4}" name="data" id="data" required/></br>
  Код подразделения  <input type="text" name="kodp" id="kodp" required/></br>

  <input type="submit" name="submit" value="Далее"/>
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

    $sql_select = "SELECT * FROM klient_tbl";
    $stmt = $conn->query($sql_select);
   if(isset($_POST["submit"]))
          {
    if ($stmt->fetchColumn() > 0) {
      foreach ($n as $row) {
        session_start();
        $_SESSION['familiya'] = $row["familiya"];
        $_SESSION['name'] = $row["name"];
        $_SESSION['otchestvo'] = $row["otchestvo"];
        $_SESSION['birthday'] = $row["birthday"];
        $_SESSION['inn'] = $row["inn"];
        $_SESSION['telefon'] = $row["telefon"];
        $_SESSION['adres'] = $row["adres"];
        $_SESSION['seria'] = $row["seria"];
        $_SESSION['nomerp'] = $row["nomerp"];
        $_SESSION['kem'] = $row["kem"];
        $_SESSION['data'] = $row["data"];
        $_SESSION['kodp'] = $row["kodp"];
        $_SESSION['id'] = $row["id"];

      }
    }
  }
?>
