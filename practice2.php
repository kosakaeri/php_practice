<?php

$name ="eri";

//課題１　もし、$nameがeriだったら、ifの後の { } の中のコードが実行される。もし、それ以外なら、elseのあとの { } の中のコードが実行される

if ($name == "eri") {
  echo "わたしはeriです";
} else {
  echo "eriではありません";
}

//課題２　for文を使って１から10000までの合計の値を表示

$total = 0;

for($a=1; $a<=10000; $a++){
 $total += $a;
}
echo $total;

//課題３　$fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力

$fruits=array("apple","orange","grape","strawberry","melon");

foreach($fruits as $b){
  echo $b;
}

//課題４　バグを修正

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){
 
 // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
  }
}

