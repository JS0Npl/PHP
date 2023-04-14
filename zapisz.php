<?php

$baza = new mysqli('localhost','root','','wedkowanie');

$imie= $_POST['imie'];
$nazwisko= $_POST['nazwisko'];
$adres= $_POST['adres'];

$sql="INSERT INTO `karty_wedkarskie`(`id`, `imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES ('','$imie','$nazwisko','$adres','','')";
$result=$baza->query($sql);

if($baza->connect_error){
    die('Connection error: '.$baza->connect_error);
}else{
    echo "połączenie udane";

}

if($imie=="admin"){
    $sql2="SELECT `id`, `imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty` FROM `karty_wedkarskie` WHERE 1";
    $result2=$baza->query($sql2);
    echo "<table style=\"border:2px solid black\">";
    foreach($result2 as $row){
        echo "<tr>";
            echo "<td>".$row['id']."</td><td>".$row['imie']."</td><td>".$row['nazwisko']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>