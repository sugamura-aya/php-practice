<?php
//1-5 if文　練習問題
$a = 5;
if($a === 5){
    echo"\$aは5です";
}
echo "<br/>";


$a = 7;
if($a === 5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
echo "<br/>";

$a = 7;
if($a === 5){
    echo "\$aは5です";
}elseif($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
echo "<br/>";


//1-5 switch文　練習問題
$people = "Saburo";

switch($people){
    case "Taro":
        echo "太郎です";
        break;
    case "Ziri":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
    default:
        echo "太郎、次郎、三郎ではありません";
        break;
}
echo "<br/>";

//1-5 三項演算子　練習問題
$a = 7;

$b = ($a > 5)? "TRUE":"FALSE";
echo $b;
echo "<br/>";

//AI練習問題
//問1（if文）
$score = 70;

if($score >= 60){
    echo "「合格」";
}else{
    echo "「不合格」";
}
echo "<br/>";

//問2（switch文）
$fruit = "apple";

switch($fruit){
    case "apple":
        echo "「りんご」";
        break;
    case "orange":
        echo "「オレンジ」";
        break;
    case "banana":
        echo "「バナナ」";
        break;
    default:
        echo "「その他の果物」";
        break;
}
echo "<br/>";

//問3（三項演算子）
$isMember =  "true";

$message = ($isMember) ? "ようこそ会員様" : "ゲストとして続行します";
echo $message;
echo "<br/>";


$age = 18; // ← これを追加！
$status = ($age >= 20) ? "大人" : "未成年";
echo "あなたは{$status}です";
echo "<br/>";





