<?php

$name = "hiroki";

if($name == "hiroki") {
    echo "私は".$name."です";
} else {
    echo "あなたの名前ではありません";
}

for($i = 0; $i <= 10000; $i++) {
    echo $i;
    
}

$fruits = array("apple","grape","orange","cherry","strawberry");

foreach($fruits as $fruit) {
    echo $fruit;
}


$start = 1;

$end = 100;

for($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0){
    echo $i;
  }
}

?>