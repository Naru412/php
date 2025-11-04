<?php
require_once('functions/search_city_time.php');
//別ファイルを一回だけ読み込むという命令
//search_city_time.phpの中に書いてある
//searchCityTime()関数を使えるようにするため

$tokyo = searchCityTime('東京');
/*上で読み込んだsearchCityTime()関数を呼び出して
結果を$toyoという変数に代入している*/

$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
/*フォームやURLから送られてきたcityの値を安全に取得して
$cityに代入する*/

$comparison = searchCityTime($city);
/*$comparison➡返ってきた値を受け取る
searchCityTime()は関数➡都市名を受け取ってその都市の時刻データを返すもの。*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
            World Clock
            </a>
        </div>
    </header>  
     <main>
        <div class="result__content">
            <div class="result-cards">
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $tokyo['name']?></p>
                        <p class="result-card__time"><?php echo $tokyo['time']?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $comparison['name']?></p>
                        <p class="result-card__time"><?php echo $comparison['time']?></p>
                    </div>
                </div>
            </div>
        </div>
     </main>
</body>
</html>