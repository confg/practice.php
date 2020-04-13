<?php

//行間を開けるための関数です
function text_br() {
    echo "\n"."\n";
}

//自分の名前を代入し、合っていたら文字を出力します
echo "課題１";
$name = "hiroki";
//if文で文字列が合っていれば出力します
if($name == "hiroki") {
    echo "\n";
    echo "私は".$name."です";
} else {
    echo "\n";
    echo "あなたの名前ではありません";
}
echo text_br();


//空の変数を用意し、繰り返し処理の値を代入します
echo "課題２";
$total = 0;
for($i = 0; $i <= 10000; $i++) {
//変数$totalに繰り返し処理の値を足します    
    $total += $i;
}
echo "\n";
echo $total;
echo text_br();


//配列に入れた文字列を順番に出力します
echo "課題３";
$fruits = array("apple","grape","orange","cherry","strawberry");
//foreach文で出力します
foreach($fruits as $fruit) {
    echo "\n";
    echo $fruit;
}
echo text_br();


//１以上１００以下の数字の中から５の倍数のみ出力します
echo "課題４";
//for文の初めの値を定義する
$start = 1;
//for文の終わりの値を定義する
$end = 100;
for($i = $start; $i <= $end; $i++) {
    //５で割り切れる式
  if($i % 5 == 0){
    echo "\n";
    echo $i;
  }
}

?>