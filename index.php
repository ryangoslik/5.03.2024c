<?php 
require_once ("connect.php");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO - 2CT05032024</title>
    <style type="text/css">
  .table_head{
    font-weight: bold;
  }
  td{
    padding: 10px;
  }
  .formularz{
    width: 600px;
  }
  input[name='imie'],input[name='nazwisko'],input[name='email']{
    width: 400px;
    height: 25px;
    margin: 10px;
    margin-bottom: -1px;
  }
  input[name='submit']{
    float: right;
    background-color: orange;
    width: 80px;
  }
  .box{
    width: 300px;
  }
hr{
  width: 33%;
  float: left;
}
      </style>
</head>
<body>
  <div class="formularz">
    <fieldset>
      <legend>Dodaj do bd</legend>
      <form action="dodaj_do_bd.php" method="POST">
        <input type="text" name="imie" placeholder="Podaj imie" required/>
        <input type="text" name="nazwisko" placeholder="Podaj naziwsko" required/>
        <input type="text" name="email" placeholder="Podaj email" required/>
        <input type="submit" name="submit" value="DODAJ"/>
      </form>
    </fieldset>
  </div>
<hr>
    <div class="box">
   <?php 
     $zapytanie = "SELECT imie,nazwisko,email from uczniowie;";
     echo"<table border=1>";
     echo "<tr class='table_head'><td>imie</td><td>nazwisko</td><td>email</td>";
     foreach($connect->query($zapytanie) as $wiersz){
        echo "<tr><td>".$wiersz['imie']."</td><td>".$wiersz['nazwisko']."</td><td>".$wiersz['email']."</td></tr>";
     }
     echo"</table>";
   ?>
    </div>
    <?php 
    $polaczenie=null;
    ?>
</body>
</html>