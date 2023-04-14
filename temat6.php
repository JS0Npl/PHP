<?php

//zad.1
echo "<h3>zad.1</h3>";

function dzialanie ($liczba1, $liczba2, $operator){
    $wynik=0;
    if($operator=="+"){
        $wynik=$liczba1+$liczba2;
        echo $wynik;
    }
    if($operator=="-"){
        $wynik=$liczba1-$liczba2;
        echo $wynik;
    }
    if($operator=="*"){
        $wynik=$liczba1*$liczba2;
        echo $wynik;
    }
    if($operator=="/"){
        $wynik=$liczba1/$liczba2;
        echo $wynik;
    }
    if($operator=="**"){
        echo pow($liczba1,$liczba2);
    }
    if($operator=="sqrt"){
        echo sqrt($liczba1);
    }
}
dzialanie(9,2,"sqrt");

//zad.2
echo "<h3>zad.2</h3>";

function rand_3_pitagorejska (){
    $a=(mt_rand());
    $b=(mt_rand());
    $c=(mt_rand());
    echo $a."<br>";
    echo $b."<br>";
    echo $c."<br>";
    if($a**2+$b**2==$c**2 or $b**2+$c**2==$a**2 or $c**2+$a**2==$b**2){
        echo "<br><br>Wylosowane liczby są liczbami pitagorejskimi";
    }
    else{
        echo "<br><br>Wylosowane liczby nie są liczbami pitagorejskimi";
    }
}
rand_3_pitagorejska();

//zad.3
echo "<h3>zad.3</h3>";

function Trojka_pitagorejska($zakres){
for($a=1;$a<=$zakres;$a++){
    for($b=1;$b<=$zakres;$b++){
        for($c=1;$c<=$zakres;$c++){
            if($a**2+$b**2==$c**2){
                echo $a." ".$b." ".$c."<br>";
            }
            else{
                continue;
            }
        }
    }
}
}

Trojka_pitagorejska(20);

//zad.4
echo "<h3>zad.4</h3>";

function cena_brutto ($netto,$vat){
    $cena_vat=$netto*$vat;
    $brutto=$cena_vat+$netto;
    echo "cena netto ".$netto."<br>";
    echo "cena brutto ".$brutto."<br>";
    echo "VAT ".$vat."<br>";
}

cena_brutto (200,0.23);

//zad.5
echo "<h3>zad.5</h3>";

function showName ($imie){
    echo $imie;
}

showName ("Jakub");

//zad.6
echo "<h3>zad.6</h3>";

function checkNumber ($liczba){
    if($liczba<0){
        $liczba=true;
        echo $liczba;
    }
    else{
        $liczba=false;
        echo $liczba;
    }
}

checkNumber (-20);

//zad.7
echo "<h3>zad.7</h3>";

function is5or7 ($liczba){
    if($liczba%5==0 and $liczba%7==0){
        $liczba=true;
        echo $liczba;
    }
}

is5or7 (70);

//zad.18
echo "<h3>zad.18</h3>";

function napis_kolor($kolor,$napis){
    echo "<h1 style=\"color:$kolor\">$napis</h1>";
}

napis_kolor(666666,"hejka")

?>