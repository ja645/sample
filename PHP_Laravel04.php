<?php
//課題1.
function double($number) {
  return $number * 2;
}
echo double(13);
echo "\n";

//2.
function sum($a, $b) {
  return $a + $b;
}
echo sum(5, 78);
echo "\n";

//3.
function multiply($arr) {
  $result = 1;
  foreach($arr as $value) {
    $result =  $result * $value;
  }
  
  return $result;
}

$arr = [9, 23, 5];
echo multiply($arr);
echo "\n";

//4.
function max_array($arr) {
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a) {
 //どうしたらいいかわからない・・・・
 
 //$max_numberと$aを比較し、$aが大きい場合は$aの値で$max_numberを更新する
  if($max_number < $a) {                  
    $max_number = $a;
  } 
 }

 return $max_number;
 }
 
 echo max_array($arr);
 
 //5.
 /*　strip_tags
 文字列からHTMLタグやPHPタグを取り除く
 第1引数に文字列、第2引数に取り除かないタグを指定する*/
 $text = '<div class="card-contents">
  <h2 class="text-title">Access</h2>
  <p>東京都渋谷区円山町28-3<br>いちご渋谷道玄坂ビル5F</p>
  <p>渋谷駅より徒歩7分</p>
</div>';

echo strip_tags($text, '<p>');

/* array_push
配列の最後に要素を追加 */

array_push($arr, 98, 563);

var_dump($arr);

/* array_merge
複数の配列を結合する */
$array1 = [1, 2,  3, 4];
$array2 = [5, 6, 7];

$array =  array_merge($array1, $array2);
var_dump($array);

/* time 現在時刻のタイムスタンプを取得
   mktime 指定時刻のタイムスタンプを取得 */
$now = time();
$weekend = mktime(23, 59, 59, 7, 9, 1999);

echo $now;
echo "\n";
echo $weekend;
echo "\n";

/* date
第1引数で指定したフォーマットで、
第2引数で指定した日時を返す　*/

echo date('Y/m/d', 124343556);
echo "\n";
echo date('Y-m-d H:i:s', 12346547);
echo "\n";
echo date('Y年m月d日H時i分s秒', 98765454746857);