<?php
function addNumber($a, $b)
#addNumberという関数を定義
#$aと$bは引数で関数に渡される
#値。
{
    $add = $a + $b;
    return $add;
    #計算結果を$addに代入
    #returnで結果を呼び出しも#とに返す。
}

$total = addNumber(2,3);
#関数に2と3を渡す。
#計算結果5が入り$totalに入る
print $total;
#$totalの中身5を表示する。
