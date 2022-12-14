<html>
<head>
<body>
<?php
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
echo "<br><br>";
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
echo "<br><br>";
//zadanie 39
echo "<br><br>";
//zadanie 40

?>
</body>
</head>
</html>