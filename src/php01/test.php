<?php
header("Content-Type: text/html; charset=UTF-8");

echo "ここが1行目<br />";
echo "ここが2行目<br />";
echo "ここが3行目<br />";


/**
 * 動画視聴中
 */
echo 'こんにちは'.'入門';
echo '<br>';

var_dump(6);
echo '<br>';
var_dump('6');
echo '<br>';

var_dump(1 == 1);
echo '<br>';
var_dump(1 == 2);
echo '<br>';

var_dump(1 == 2);
echo '<br>';
var_dump(1 < 2);
echo '<br>';
var_dump(1 <= 1);
echo '<br>';
var_dump(1 > 2);
echo '<br>';

$score=70;

if($score>=80){
    echo '合格点です'.'<br>';
}elseif($score>=70){
    echo 'どんまいです'.'<br>';
}else{
    echo '不合格です'.'<br>';
}

$sex='男性';
$age=50;

if($sex =='男性'){
    if(35<=$age && $age<50){
        echo '中年です';
    }elseif($age <35){
        echo '若者です';
    }elseif($age>=50){
        echo'オジサンです';
    }   
}else{
    echo'女性です';
    echo'<br>';
}

echo'<br>';

$arr=['PHP','Ruby','Python'];
//配列の要素(＝値)の取り出し
$arr[0];//PHP
$arr[1];//Ruby
$arr[2];//Python
echo $arr[0].'<br>';//PHP

$arr=['key1'=>'PHP','key2'=>'Ruby'];
echo $arr['key1'].'<br>';//PHP

$arr=['PHP','Ruby'];
foreach($arr as $lang){
    echo $lang;
    echo '<br>';
}
//PHP
//Ruby

function study($lang){
    echo "{$lang}入門";
    echo '<br>';
    echo "{$lang}講座";
    echo '<br>';
}
//メソッド(関数)呼び出しが以下
study('PHP');
study('Ruby');



function text($number1, $number2)
{
  $value = $number1 + $number2;  // $number1 と $number2 を足して $value に格納
  return $value;  // 計算結果を返す
}

$total = text(2, 4);  // text 関数を呼び出し、引数に 2 と 4 を渡して返り値を $total に格納
echo $total.'<br>';  // $total の値を画面に表示


$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}