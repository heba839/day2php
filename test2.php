<?php
$text = "This one line, \n and this is another line.";

echo nl2br($text);
//q1

//q3 day1
echo "<br>";
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo $_SERVER['SCRIPT_FILENAME'];

//q3 day2
echo "<br>";
echo "<pre>";
print_r ($_SERVER);
echo "</pre>";


//q4
$numbers = [12, 45, 10, 25];
        
echo array_sum($numbers);
echo "<br>";
$avg= array_sum($numbers)/4;
echo $avg;
echo "<br>";
print_r(array_reverse($numbers));

echo "<br>";echo "<br>";

//q5

$age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
asort($age);


foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
$age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
$age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
rsort($age);


foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
echo "<br>";
$age = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
ksort($age);


foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}


?>