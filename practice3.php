<?php

//課題１
//仮引数$selectの数値を二倍にして返す関数
function double($select) {
    
    //$selectの値を二倍にする処理
    $select *= 2;
    
    //処理の結果を返す
    return $select;
}
echo double(30);
echo "\n";



//課題２
//仮引数$aと$bを足した結果を返す関数
function abc($a, $b) {
    
    //$cは$a+$bの結果を保存する変数
    $c = 0;
    
    //空の変数に処理を代入
    $c = $a + $b;
    
    //処理の結果を返す
    return $c;
}
echo abc(2,8);
echo "\n";



//課題３
$arrays =array(1, 3, 5, 7, 9);
function mult($arr) {
    $total =1;
    foreach($arr as $array) {
      $total *= $array;
    }
    return $total;
}
echo mult($arrays);
echo "\n";



//課題４
$sample =array(10, 30, 50, 70, 90);
function max_array($arr) {
    $max_number = $arr[0];
    foreach($arr as $a) {
        if($a > $max_number) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array($sample);
echo "\n";



//課題５

//・strip_tags
//HTMLタグが入った文字列のタグだけ削除したい(<h1>の部分)
$html_tags ="<h1>HELLO.WORLD<h1/>";


echo strip_tags($html_tags);
echo "\n";

//また、第二引数で削除から除外する要素を指定できる
$html_tags2 ="<h1>HELLO.WORLD<h1/><p>HELLO.PHP<p/>";
//<h1>と<p>は許可する
echo strip_tags($html_tags2,"<h1><p>");
echo "\n";


//・array_push

//配列A、B、Cの値をもつ$dataを用意しました
$data = array("A","B","C");

//上記の配列に対して新たなデータ"D"を追加したい
array_push($data,"D");
//追加したデータを出力する場合は、$data[3]　今回は配列全てを表示したかったのでprint_rを使用しました
echo print_r($data);


//array_pushの連想配列の場合

//連想配列A、B、Cの値をもつデータを用意しました
$datas = array(0 => "A", 1 => "B", 2 => "C");
//配列をキーと値をそれぞれ取り出す
foreach($datas as $key => $value) {
    $datas_key[] = $key;
    $datas_val[] = $value;
}
//array_pushを使ってキーと値にそれぞれデータを追加する
    array_push($datas_key,3,4);
    array_push($datas_val,"D","E");
//array_combineでキーと値の配列をマージする    
    $datas =array_combine($datas_key,$datas_val);
    
    print_r($datas);
    
    
//・array_merge

//配列１　元の配列
$fruits1 = array("red" => "apple", "yellow" => "banana");
//配列２　追加したい配列
$fruits2 = array("pink" => "peach", "purple" => "grape");

//array_mergeを使い配列１に配列２の内容を追加し、$resultに代入する
$result = array_merge($fruits1,$fruits2);

print_r($result);



//課題５
//・time 　現在のUNIXタイムスタンプを表示する
echo time();
echo "\n";


//その地域ごとのタイムゾーンを設定する
date_default_timezone_set('Asia/Tokyo');

//mktime  指定日時のタイムスタンプを取得　mktime(時、分、秒、月、日、年)
$timestamp = mktime(9, 0, 0, 1, 11, 2020);
//今回は１月１１日の9時を指定しました
echo $timestamp;
echo "\n";

//・date
//dateを使ってUNIXタイムスタンプをフォーマットする
$timestamp2 = time();
//第一引数にパラメータを指定し、第二引数にUNIXタイムスタンプを指定し基準にします
date('Y/m/d', $timestamp2);

//time()と同じように第二引数は省略できる
echo date('Y/m/d');
?>