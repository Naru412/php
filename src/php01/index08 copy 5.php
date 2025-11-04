<?php
$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'person3' => 'Saburo'
);
#キー➡値という形でデータを持っている

foreach ($people as $person => $name) {
    #配列$peopleの中のキーを$personに、
    #そのキーに対応する値を$nameにいれて処理をする
  print $person . "は" . $name . "です" . '<br />';
}

/*連想配列$peopleのキーと値を両方取り出して
「person1はTaroです」という文章を１行ずつ表示するプログラム