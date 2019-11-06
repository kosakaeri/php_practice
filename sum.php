<?php
//課題1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成
function double($x){
  $result = $x*2;
  return $result;
}
echo double(900);

//課題2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成
function plus($a,$b) {
  $result = $a+$b;
  return $result;
}
echo plus(100,200);

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数
function x($arr) {
  $total = 1;
  foreach($arr as $a) {
    $total *= $a;
  }
  return $total;
}
$numbers = [1, 3, 5, 7, 9];
echo x($numbers);

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 $z = 0;
 $y = 0;
 
 foreach($arr as $a) {
  
   if($a > $arr[0]) {
     $y = $a;
   }
   if($a < $arr[0]) {
     $y = $arr[0];
   }
   $z = $y;
 }
 return $z;
 }
$numbox = [0, 4, 800, 9756];
echo max_array($numbox);

//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

$str = "<p><?php var_dump('string'); ?>test<br>text</p>";
echo strip_tags( $str, '<p>');

$fruits = ['apple', 'orange', 'melon'];
array_push($fruits,'banana', 'pineapple');
print_r($fruits);

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$array3 = [7, 8, 9];
$array = array_merge($array1,$array2,$array3);
print_r($array);

$date = time();
echo $date;

$date2 = mktime(0, 0, 0, 1, 0, 2018);
print date ("y年m月d日",$date2);


