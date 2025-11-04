<?php

function exam($score1,$score2, $score3)
{
    $total = $score1 +  $score2 + $score3;
    if ($total > 210) {
      echo $total . "点なので合格です";
    } else {
      echo $total . "点なので不合格です";    
    }
}
echo (exam(80,60,90));
/*exam(80,60,90)が呼ばれて→
"230点なので合格です"を返す。
echoがその文字列を返す。