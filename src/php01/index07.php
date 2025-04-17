<?php
//1-7

//引数と戻り値あり
function outputNumber($a){
    echo '引数の値は'.$a.'です'.'<br>';
    return;//ここで関数終了の意（返す値がなければ書かなくてもOK）
}
outputNumber(2);

//引数と戻り値なし
function outputHello(){
    echo'Hello world'.'<br>';
}
outputHello();

//引数と戻り値あり
function text($number1,$number2){
    $value=$number1+$number2;
    return $value;
}
$total=text(2,4);
echo $total.'<br>';

//問題（関数を定義して結果が５になるようコードを書くこと）
function test($num1,$num2){
    $score=$num1+$num2;
    return $score;
}
$score=test(2,3);
echo $score.'<br>';

//問題1
function exam($score1,$score2,$score3){
    $totalscore=$score1 + $score2 + $score3;
    if($totalscore>210){
        echo $totalscore . '点なので合格です' . '<br>';
    }else{
        echo $totalscore . '点なので不合格です' . '<br>'; 
    }
}
echo (exam(80,60,90));

//問題2
function triangle($bottom, $height){
    $area1= $bottom * $height / 2;
    return $area1;
}
echo triangle(7, 8) .'<br>';

function rectangle($width, $height){
    $area2=$width*$height;
    return $area2;
}
echo rectangle(3,4).'<br>';

function trapezoid($top, $bottom, $height){
    $area3=($top+$bottom)*$height/2;
    return $area3;
}
echo trapezoid(2,5,5).'<br>';


