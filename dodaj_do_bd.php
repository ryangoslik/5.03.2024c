<?php 
include_once("connect.php");
if(isset($_POST['imie']) && isset ($_POST['nazwisko']) && isset ($_POST['email'])){


$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$email = $_POST['email'];
echo "$imie, $nazwisko, $email";
$dodaj = "INSERT INTO uczniowie(imie,nazwisko,email) VALUES ('$imie','$nazwisko','$email');";
if($connect->exec($dodaj)){
    echo("dodano do dbd");
    header("Refresh:3, url=index.php");
}else{
    echo("blad chlopoei");
    header("Refresh:3; url=index.php");
}
header("Location:index.php");
}else{
    echo"co kukosz chopie bruh...";
    header("Refresh:3; url=index.php");
}
$connect = null;
?>