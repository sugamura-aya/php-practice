<?php
header("Content-Type: text/html; charset=UTF-8");

//1-6 練習問題for文
for($i = 1; $i<=5; $i++){ 
    echo $i*2 . "<br />";
}

//1-6 練習問題while文
$i = 0;

while($i < 3){
    echo "i = " . $i . "<br />";
    $i += 1;
}

$count = 0;

while($count < 20){
    echo $count . "<br />";
    $count +=1;
}

$i = 6;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  
  echo $i . "<br />";
  $i++;
}

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}


$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }

  if ($count % 3 === 0) {
    echo "★" . "<br />";
  } else {
    echo $count . "<br />";
  }

  $count++;
}

$num = 0;

do {
  echo 'num = ' . $num . '<br />';
  $num += 1;
} while ($num < 3);


//1-6 応用問題1
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}


for ($i = 1; $i <= 5; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo "★";
  }
   echo "<br />";
}


//1-6 応用問題2

for($i = 1;$i <=5;$i++){
    for($j = 1;$j <=5; $j++){
        echo"●";
    }
    echo "<br />";
}

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz . "<br />";
  } else if ($i % 3 == 0) {
    echo $Fizz . "<br />";
  } else if ($i % 5 == 0) {
    echo $Buzz . "<br />";
  } else {
    echo $i . "<br />";
  }
}

for ($i = 1; $i <= 5; $i++) {
  echo $i . "<br />";
}

/*$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}


$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}
*/

//練習問題
$people = [
  ['Taro',25,'men'],
  ['Jiro',20,'men'],
  ['hanako',16,'women'],
];

foreach($people as $person){
  echo $person[0].'()'.$person[1].'歳'.$person[2].')'.'<br>';
}

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}