<html>
<head>
</head>
<body>
<?php
// zadanie 1
echo "<h1>PHP to język skryptowy wykonywany po stronie serwera</h1>";
// zadanie 2
$php = "$$$ PHP ćwiczenia $$$";
echo "<title> $php </title>";
// zadanie 3
$a = 97;
$b = 3.14;
$c = "PHP";
echo "$a to liczba pierwsza <br>";
echo "Liczba PI to: $b <br>";
echo "$c to język skryptowy";
// zadanie 4
$x = 10;
$y = 7;
$xpy = $x + $y;
$xmy = $x - $y;
$xry = $x * $y;
$xdy = $x / $y;
$res = $x % $y;
$ptx = $x * $x;
$pty = $y * $y;
echo "<br><br> $x + $y = $xpy ";
echo "<br> $x - $y = $xmy";
echo "<br> $x x $y = $xry";
echo "<br> $x / $y = $xdy";
echo "<br> Reszta z dzielenia wynosi: $res";
echo "<br> Potęga liczby 10 wynosi $ptx, a liczby 7 wynosi $pty";
// zadanie 5
$a5 = 15;
$b5 = 10;
echo "<br><br>Wartości przed zamianą: $a5, $b5";
$zm1 = $a5;
$a5 = $b5;
$b5 = $zm1;
echo "<br>Wartości po zamianie: $a5, $b5";
// zadanie 6
$a = 10;
$b = 50;
$pole = $a * $b;
$obwod = $a + $a + $b + $b;
echo "<br><br> Pole powierzchni: $pole, obwód: $obwod";
// zadanie 7
$x7 = 50;
if ($x > 100){
    echo "<br><br> Liczba jest większa od 100";
}
if ($x < 100){
    echo "<br><br> Liczba nie jest większa od 100";
}
// zadanie 8
$x8 = 150;
if ($x8 >= 100 && $x8 < 1000){
    echo "<br><br> Liczba jest trzycyfrowa";
}
// zadanie 9
$x9 = 15000;
if ($x9 < 0){
    echo "<br><br> Liczba jest mniejsza od zera";
}
if ($x9 > 1000){
    echo "<br><br> Liczba jest większa od 1000";
}
// zadanie 10
$x = 15;
if ($x % 2 == 0){
    echo "<br><br> Liczba jest parzysta";
}
else {
    echo "<br><br> Liczba jest nieparzysta";
}
// zadanie 11
$wiek = 17;
if ($wiek < 18){
    echo "<br><br>Jeszcze nie możesz głosować";
}
if ($wiek >= 18 && $wiek < 21){
    echo "<br><br>Możesz tylko głosować";
}
if ($wiek >= 21 && $wiek < 30){
    echo "<br><br>Możesz głosować i kandydować do sejmu";
}
if ($wiek >= 30 && $wiek < 35){
    echo "<br><br>Możesz głosować i kandydować do sejmu i senatu";
}
if ($wiek >= 35){
    echo "<br><br>Możesz głosować i kandydować do sejmu i senatu oraz na prezydenta";
}
//zadanie 12
$ile = 5;
switch ($ile){
    case 1:
        echo "<br><br> +";
        break;
    case 2:
        echo "<br><br> ++";
        break;
    case 3:
        echo "<br><br> +++";
        break;
    case 4:
        echo "<br><br> ++++";
        break;
    case 5:
        echo "<br><br> +++++";
        break;
    case 6:
        echo "<br><br> ++++++";
        break;
    case 7:
        echo "<br><br> +++++++";
        break;
    case 8:
        echo "<br><br> ++++++++";
        break;
    case 9:
        echo "<br><br> +++++++++";
        break;
    default:
        echo"<br><br> Wartość poza zakresem";
        break;
}
// zadanie 13
$miesiac = 11;
switch ($miesiac){
    case 1:
        echo "<br><br> Kwartał I";
        break;
    case 2:
        echo "<br><br> Kwartał I";
        break;
    case 3:
        echo "<br><br> Kwartał I";
        break;
    case 4:
        echo "<br><br> Kwartał II";
        break;
    case 5:
        echo "<br><br> Kwartał II";
        break;
    case 6:
        echo "<br><br> Kwartał II";
        break;
    case 7:
        echo "<br><br> Kwartał III";
        break;
    case 8:
        echo "<br><br> Kwartał III";
        break;
    case 9:
        echo "<br><br> Kwartał III";
        break;
    case 10:
        echo "<br><br> Kwartał IV";
        break;
    case 11:
        echo "<br><br> Kwartał IV";
        break;
    case 12:
        echo "<br><br> Kwartał IV";
        break;
    default:
        echo "<br><br> Błędny numer miesiąca";
        break;
}
// zadanie 14
$a14 = 10;
$b14 = 20;
$c14 = 30;
if ($a14 > $b14 && $a14 > $c14){
    echo "<br><br> Liczba $a14 jest największa";
}
if ($b14 > $a14 && $b14 > $c14){
    echo "<br><br> Liczba $b14 jest największa";
}
if ($c14 > $a14 && $c14 > $b14){
    echo "<br><br> Liczba $c14 jest największa";
}
// zadania 15 - 20 --> petla for
// zadanie 15
echo "<br>";
for($x15 = 5; $x15 <=15; $x15++){
    echo "<br>$x15";
}
// zadanie 16
echo "<br>";
for($x16=10;$x16>=0;$x16-=0.5){
    echo"<br>$x16";
}
// zadanie 17
echo "<br><br>";
for($x17=1; $x17 <=10; $x17++){
    echo "PHP$x17 ";
}
// zadanie 18
echo "<br><ul>";
for ($element=1; $element <=4; $element++){
    echo "<li>Element nr $element</li>";
}
echo "</ul>";
// zadanie 19

// zadanie 20
echo "<br>";
for ($x20=1; $x20 <=9; $x20++){
    echo "$x20-";
    if ($x20 == 8){
        break;
    }
}
echo "9";

// zadania 15-20 --> petla while
?>
</body>
</html>

