<?
var_dump("数学の点数を入力してください");
$score_1 = trim(fgets(STDIN));

var_dump("国語の点数を入力してください");
$score_2 = trim(fgets(STDIN));

if ($score_1 >= 80 && $score_2 >= 80) {
    var_dump("合格です。");
} elseif ($socre_1 >= 50 or $score_2 >= 50) {
    var_dump("追試です。");
} else {
    var_dump("不合格です。");
}