<?php
$count = 0;

while ($count <= 100) {
    if ($count === 20) {
        break;
    }
    if ($count % 3 === 0) {
      $count++;
      continue;
      #$countが3の倍数の時
      #$countを1増やして次のループに進む
    }
    echo $count . '<br />';
    $count++;
}    
