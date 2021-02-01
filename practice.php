<?php
echo 'hello php!';
echo PHP_EOL;

//課題　1.
$a = 3;
$b = 7;

echo $a + $b;
echo PHP_EOL;


//2.
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月"];

echo $array_month[7];
echo PHP_EOL;

//3.
$hello = "Hello,";
$name = "Okayama";
$world = "s World!";

echo $hello . $name . $world;
echo PHP_EOL;

//4.
$tech_boost = "tech";

echo $tech_boost . "boost";
echo PHP_EOL;

//5.
$calender_2018 = [          //変数の初めが数字&配列は"{}"でなく"[]"
  "January" => "1月",
  "February" => "2月",      //"、"でなく","
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",          //">"が抜けている
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",      //文字列型は""か''で囲む
  "November" => "11月",
  "December" => "12月"
  ];

// 12月を表示する
echo $calender_2018["December"]; //キーを""で囲む