<?php
function getSquareArea($base, $height)
{
  return $base * $height;
 # 四角形の面積　縦×横
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
  #三角形の面積　底辺×高さ÷2
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
  #台形の面積　（上底＋下底）×高さ÷2
}

echo getSquareArea(5,5) . "\n";
echo getTriangleArea(7,8) . "\n";
echo getTrapezoidArea(4,5,4);
/*"\n"は改行を意味する。ブラウザでは反映されない。
ブラウザで反映したい場合は<br>を使う