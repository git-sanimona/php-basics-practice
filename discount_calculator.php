<?php
//課題1: 割引計算プログラム
//変数の定義

$original_price = 5000;
$discount_rate = 0.2;

//計算処理

$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;

//結果の表示

echo "<strong>割引の計算</strong><br>";
echo "元の価格: {$original_price}円<br>";
echo "割引率: " . $discount_rate * 100 . "％<br>";
echo "割引額: {$discount_amount}円<br>";
echo "割引後の価格: {$final_price}円<br>";

//課題2: 偶数・奇数判定プログラム
//変数の定義

$number = 5;

//判定結果表示

echo "<strong>偶数・奇数の判定</strong><br>";
if ($number % 2 === 0) {
    echo "{$number}は偶数です<br>";
} else {
    echo "{$number}は奇数です<br>";
}

//課題3: 複数条件の判定
//変数の定義（代入する年齢にあわせて$is_memberと$is_studentの真偽値を変更）

$age = 25;
$is_member = true;
$is_student = false;

//判定結果表示

echo "<strong>複数条件の判定</strong><br>";

if ($age >= 18 && $is_member) {
    echo "割引が適用されます<br>";
} elseif ($age >= 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
} else {
    echo "割引は適用されません<br>";
}

//課題4: 複合代入演算子の練習
//変数の定義

$score = 100;

//スコア計算

echo "<strong>スコアの計算</strong><br>";

echo "初期スコア: {$score}点<br>";
$score = $score + 50;
echo "ボーナス後: {$score}点<br>";
$score = $score - 30;
echo "ダメージ後: {$score}点<br>";
//スコア　２倍アイテム使用
$score = $score * 2;
echo "最終スコア: {$score}点";

