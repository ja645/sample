<?php

//課題1.
$name = "岡山";

if ($name == "岡山") {
  echo "私は" . $name . "です";
  echo "\n";
} else {
  echo $name . "ではありません";
  echo "\n";
}

//2.
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
  $total += $i;
}

echo $total;
echo "\n";

//3.
$fruits = ["orange", "apple", "grape", "peach", 
"strawberry"];

foreach ($fruits as $fruit){
  echo $fruit;
  echo "\n";
}

//4.
/* for文の始めの値を定義する */         //'/'を'*/'に変更
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){     //'<'を'<='に変更

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;                            //';'を追記　　　
    echo "\n";                          //改行
  }
}