<?php

//zad.1
echo "<h3>zad.1</h3>";

echo "Dzisiaj jest ".date("m.d.y")." godzina ".date("H:i:s")."<br>";

//zad.2
echo "<h3>zad.2</h3>";

echo "Urodziłem się w ".date("l", mktime(0,0,0,5,10,2004));

function CountDown($hour, $minute, $second, $month, $day) 
{ 
$eventDate = mktime($hour, $minute, $second, $month, $day); 
$today = time(); 
$secondsTo = $eventDate - $today; 
$minutesTo = round($secondsTo / 60); 
$hoursTo = round($minutesTo / 60); 
$daysTo = round($hoursTo / 24); 
$weeksTo = round($daysTo / 7); 
$monthsTo = round($weeksTo / 4); 
echo "<br>Do urodzin zostało:";
$values = " seconds ".$secondsTo.", minutes ".$minutesTo.", hours ".$hoursTo.", days ".$daysTo.", weeks ".$weeksTo.", months ".$monthsTo; 
return $values; 
}
echo CountDown(0,0,0,5,10);

//zad.3
echo "<h3>zad.3</h3>";

$rok=2023;

echo "Rok $rok ";
if(date("L", mktime(0,0,0,0,0,$rok))==0){
    echo "nie jest przestępny";
}elseif(date("L", mktime(0,0,0,0,0,$rok))==1)
echo "jest przestępny";

?>