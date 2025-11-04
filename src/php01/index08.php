<?php

$people = [
['Tao', 25, 'men'],
['Jro', 20, 'men'],
['hanako', 16, 'women']
];
#配列の中に配列が入っている多次元配列

foreach ($people as $person) {
  //$peoleの中から一人分ずつ取り出して$personに入れる。
  //$person自体がまた配列なので中の要素にインデックスでアクセス
  #$person[0]➡名前
  #$person[1]➡年齢
  #$person[2]➡性別

  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
#.は文字を繋げる連結演算子
