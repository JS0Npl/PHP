<?php

//zad.1
echo "<h3>zad.1</h3>";

echo "<table>";
for ($w = 1; $w <= 2; $w++)
{
    echo "<tr>";
        for ($k = 1; $k <= 10; $k++)
        {
            echo "<td>*</td>";
        }
    echo "</tr>";
}
echo "</table>";

//zad.2
echo "<h3>zad.2</h3>";

for ($i = 1; $i <= 100; $i+=2) 
{ 
    $text=$i; 
   if ($i < 100) echo $text.' '; else break;
}
echo"<br>";
for ($i; $i >= 1; $i-=4) 
{ 
    $text=$i; 
    if ($i > 0) echo $text.' '; else break;
}

//zad.3
echo "<h3>zad.3</h3>";

for ($n = 10; $n > 0; $n--) 
{ 
    $text=$n; 
    $text*=$text;
   if ($n > 0) echo $text." "; else break;
}
echo"<br>";
for ($n = 10; $n > 0; $n-=2) 
{ 
    $text=$n; 
    $text*=$text;
   if ($n>0) echo $text." "; else break;
}

//zad.4
echo "<h3>zad.4</h3>";

echo "for i++:<br>";
for($i=1; $i<=10; $i++)
{
    echo $i." ";
}
echo "<br>";
echo "while i--:<br>";
$i=10;
while($i>=1)
{
    $v=$i--;
    echo $v." ";
}
echo "<br>";
echo "do while --i:<br>";
$i=10;
do{
    $v=--$i;
    echo $v." ";
}
while($i>=1);

//zad.5
echo "<h3>zad.5</h3>";

$nr=13;
$a=2;
$b=3;

if($nr==0 or $nr==1){
    echo "liczba nie jest liczbą pierwszą";
}

if(($nr % $a == 0) or ($nr % $b == 0)){
    echo "liczba nie jest liczbą pierwszą";
}
else{
    echo "liczba jest liczbą pierwszą";
}

//zad.6
echo "<h3>zad.6</h3>";

echo "<table>";
echo "<tr>";
   for ($g = 0; $g <= 10; $g++){
      echo "<td>$g</td>";
    }
echo "</tr>";

$x=1;
$y=1;

for ($w = 1; $w <= 10; $w++){
    echo "<tr>";
    echo "<td>$y</td>";
        for ($x = 1; $x <= 10; $x++){
            $c= $y*$x;
            echo "<td>$c</td>";
        }
    $y++;
    echo "</tr>";
}
echo "</table>";

//zad.7
echo "<h3>zad.7</h3>";

echo "<h5 style=\"color: blue\">**********</h5>";
for ($a = 1; $a <= 8; $a++){
        echo "\n";
        for ($b = 1; $b <= 10; $b++){
            echo "*";
        }
}
echo "<h5 style=\"color: blue\">**********</h5>";

//zad.9
echo "<h3>zad.9</h3>";

$bok=6;
$iloscblok=$bok*$bok;
echo "$iloscblok";

//zad.10
echo "<h3>zad.10</h3>";

for($a=1;$a<=10;$a++){
    echo "$a<br>";
}

//zad.11
echo "<h3>zad.11</h3>";

for($a=10;$a>=0;$a--){
    echo "$a<br>";
}

//zad.12
echo "<h3>zad.12</h3>";

for($a=10;$a>=0;$a-=0.5){
    echo "$a<br>";
}

//zad.13
echo "<h3>zad.13</h3>";

$a=1;
while($a<=10){
    echo "PHP$a ";
    $a++;
}

//zad.14
echo "<h3>zad.14</h3>";

echo "<ul>";
for($a=1;$a<=4;$a++){
    echo "<li>Element nr $a</li>";
}
echo "</ul>";

//zad.15
echo "<h3>zad.15</h3>";

$b=0;

for($a=1;$a<=10;$a++){
    if($a % 2 == 0){
        $b+=$a;
    }
    else{
        continue;
    }
}
echo $b;

//zad.16
echo "<h3>zad.16</h3>";

for($a=1;$a<=9;$a++){
    if($a==4){
        continue;
    }
    if($a==9){
        echo "9";
        break;
    }
    echo "$a-";
}

//zad.16
echo "<h3>zad.16</h3>";

echo "<table>";
for($y=1;$y<=4;$y++){
    echo "<tr>";
        for ($x = 1; $x <= 4; $x++){
            echo "<td style=\"background-color:black; height:12px; width:10px;\"> </td>";
            echo "<td style=\"background-color:white; height:12px; width:10px;\"> </td>";
        }
    echo "</tr>";
    echo "<tr>";
        for ($x = 1; $x <= 4; $x++){
            echo "<td style=\"background-color:white; height:12px; width:10px;\"> </td>";
            echo "<td style=\"background-color:black; height:12px; width:10px;\"> </td>";
        }
    echo "</tr>";
}
echo "</table>";

?>

