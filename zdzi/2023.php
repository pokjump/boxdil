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
$x17 = 1;
while ($x17 <= 10) {
    echo "PHP" . $x17 . " ";
    $x17++;
}
// zadanie 18
echo "<br><br>";
$x18 = 1;
echo "<ul>";
do {
    echo "<li>Element nr " . $x18 . "</li>";
    $x18++;
} while ($x18 <= 4);
echo "</ul>";
// zadanie 19
$suma = 0;
for ($i = 0; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    $suma += $i;
}
echo "Suma liczb nieparzystych od 0 do 20 wynosi: " . $suma;
// zadanie 20
echo "<br><br>";
for ($x20=1; $x20 <=9; $x20++){
    echo "$x20-";
    if ($x20 == 8){
        break;
    }
}
echo "9";
// zadanie 21
$liczba21 = 10;     
  $silnia = 1;
    for ($i=1; $i<=$liczba21; $i++) {
      $silnia *= $i;
    }
  print ("$liczba21! = $silnia");
echo "<br><br>";
//zadanie 22
for($i22 = 1; $i22 < 6; $i22++){
	  if($i22 = 1){
	    echo "*";
      echo "<br>";
	  }
   	if($i22 = 2){
    	echo "**";
      echo "<br>";
	  }
    if($i22 = 3){
	    echo "***";
      echo "<br>";
	  }
    if($i22 = 4){
	    echo "****";
      echo "<br>";
	  }
    if($i22 = 5){
	    echo "*****";
      echo "<br>";
	  }
}
//zadanie 23
echo "<br>";
for($i23 = 1; $i23 < 10; $i23++){
	  if($i23 = 1){
    	echo "*";
      echo "<br>";
	  }
   	if($i23 = 2){
	    echo "**";
      echo "<br>";
	  }
    if($i23 = 3){
	    echo "***";
      echo "<br>";
	  }
    if($i23 = 4){
	    echo "****";
      echo "<br>";
	  }
    if($i23 = 5){
	    echo "*****";
      echo "<br>";
	  }
    if($i23 = 6){
    	echo "****";
      echo "<br>";
	  }
  	if($i23 = 7){
	    echo "***";
      echo "<br>";
	  }
    if($i23 = 8){
	    echo "**";
      echo "<br>";
  	}
    if($i23 = 9){
	    echo "*";
      echo "<br>";
	  }
}

//zadanie 24
?>
<table>
<?php
for ($i24 = 1; $i24 <= 10; $i24++) {
    echo "<tr>\n";  

for ($x24 = 1; $x24 <= 10; $x24++) {
    echo "<td>";
    echo $x24 * $i24;
    echo "</td>\n";
 }
echo "</tr>\n";
}
?>
</table>
<?php
//zadanie 25
$kolory = array ("Żółty", "Niebieski", "Czerwony");
echo "<ul>
    <li> $kolory[0]</li>
    <li> $kolory[1]</li>
    <li> $kolory[2]</li>
      </ul>
      <br>";
//zadanie 26
$auta = [0 => "VW", 1 => "Audi", 2=> "BMW", 3 => "Mercedes"];
foreach ($auta as $value){
  echo "$value ";
}
//zadanie 27
$liczby27 = array(10, 25, 99, 31, 01, -15);
echo "<br><br> Suma elementów tablicy to: ";
echo array_sum($liczby27);
//zadanie 28
echo "<br><br><br>";
$liczby28 = [10, 15, 9, 61, 78, 2, 44, 21, 30];
echo max($liczby28);
echo "<br><br>";
//zadanie 29
$europa = array("Włochy" => "Rzym", "Belgia" => "Bruksela",
 "Dania" => "Kopenhaga", "Finlandia" => "Helsinki",
 "Francja" => "Paryż", "Niemcy" => "Berlin",
 "Rosja" => "Moskwa", "Polska" => "Warszawa");
foreach ($europa as $key => $value){
  echo "Kraj: $key, stolica: $value<BR>";
}
echo "<br><br>";
//zadanie 30
$temp = array(15, 18, 22, 28, 33, 37, 30, 25, 19, 14, 13, 7, 5, 0, -1, -9);
$srednia30 = array_sum($temp) / count($temp);
echo "Średnia to: $srednia30";
echo "<br><br>";
//zadanie 31
function pokazImie($imie = "Filip")
{
  echo "$imie";
}
pokazImie();
echo "<br><br>";
//zadanie 32
function poleTR()
{
  $a = 5;
  $wptr = ($a * $a) * sqrt(3) / 4;
  echo $wptr;
}
poleTR();
echo "<br><br>";
//zadanie 33
function iloczyn($a33 = 0, $b33 = 0){
  $sab = $a33 * $b33;
  return $sab;
}
echo iloczyn(5,25);
echo "<br><br>";
//zadanie 34
function czyUjemna($a34 = 0){
  if ($a34 <= 0){
    return true;
  } 
}
echo czyUjemna(5);
//zadanie 35
function max2($x35, $y35, $z35){
	  if($x35 > $y35 && $x35 > $z35){
    	echo "Najwieksza liczba to: $x35";
    }
    else if($y35 > $x35 && $y35 > $z35){
    	echo "Najwieksza liczba to: $y35";
    }
    else if($z35 > $x35 && $z35 > $y35){
    	echo "Najwieksza liczba to: $z35";
    }
    else{
      echo "d-_-b";
    }
}
max2(1,2,3);
echo "<br><br>";
//zadanie 36
function dziel($alfa){
	if($alfa % 3 == 0 && $alfa % 5 == 0){
    return true;
  }
}
echo dziel(15);
echo "<br><br>";
//zadanie 37
function BMI($bmi = 23){
  if ($bmi < 18.5){
    echo "Masz niedowagę";
  }
  else if ($bmi < 24.99){
    echo "Twoja waga jest prawidłowa";
  }
  else if ($bmi > 25.00){
    echo "Masz nadwagę!!!";
  }
  else {
    echo "lol";
  }
}
BMI();
echo "<br><br>";
//zadanie 38
function sredniaAry($tablica) {
    $lel = count($tablica);
    if ($lel === 0) {
        return 0;
    }
    $suma = array_sum($tablica);
    $srednia = $suma / $lel;
    return $srednia;
}
$tablica = [10, 20, 30, 40, 50];
$srednia = sredniaAry($tablica);
echo "Średnia arytmetyczna wynosi: " . $srednia;
//zadanie 39
echo "<br>";
function kolornapis($kolor, $napis) {
    echo "<p style='color: $kolor;'>$napis</p>";
}
$kolorHex = "#FF0000";
$tekst = "Ten tekst będzie w czerwonym kolorze.";
kolornapis($kolorHex, $tekst);
//zadanie 40
function rozmien($kwota) {
    $nominaly = [10, 5, 2, 1];
    $reszta = $kwota;
    foreach ($nominaly as $nominal) {
        $ilosc = floor($reszta / $nominal);
        if ($ilosc > 0) {
            echo "$ilosc x $nominal zł<br>";
            $reszta -= $ilosc * $nominal;
        }
    }
}
?>
    <h1>Rozmieniacz</h1>
    <form method="post" action="">
        Podaj kwotę w złotych: <input type="number" name="kwota" required>
        <input type="submit" name="submit" value="Rozmień">
    </form>
<?php
if (isset($_POST['submit'])) {
    $kwota = intval($_POST['kwota']);
    echo "Kwota do rozmienienia: $kwota zł<br><br>";
    echo "Rozmienienie:<br>";
    rozmien($kwota);
}
?>
</body>
</html>
