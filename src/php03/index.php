<?php
require_once('config/status_codes.php');
$random_numbers = array_rand($status_codes, 4);
 /*status_codes.phpに定義された配列からランダムに4つ選ぶ。
 array_rand➡配列のキーをランダムに取り出す関数 
            第2引数に取り出す値を指定できる 
            ランダムに4つ選ばれたキーが$random_numbersに入る */
foreach ($random_numbers as $index) {
   /* $random_numbersに入っている各キーを順に$indexに代入*/
$options[] = $status_codes[$index];
   /*そのキーに対応する「値」を取得
   $options[]に順次追加していく*/
}
$question = $options[mt_rand(0, 3)];
/*$optionsの中からランダムに一つ選ぶ
mt_rand(0, 3)➡「0~3」のランダムな整数*/

?>          

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <!-- ヘッダーの内側のまとまり -->
            <a class="header__logo" href="/php03">
                Status Code Quiz
            </a>    
        </div>
    </header>
    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q. 以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                <?php echo $question['description'] ?>  
                <!-- ↑これは後で追加した   -->
                </p>
            </div>    
            <form class="quiz-form" action="result.php" method="post">
                <input type="hidden" name="answer_code" 
                value="<?php echo $question['code'] ?>">
                <!-- hidden➡ユーザーには見せたくないけど裏でデータを送りたい -->
                <div class="quiz-form__item">
                    <?php foreach ($options as $option): ?>
                        <!-- $option➡$optionsの中から一つずつ取り出された要素 -->
                    <div class="quiz-form__group">
                        <input class="quiz-form__radio" 
                        id="<?php echo $option['code'] ?>" 
                        type="radio" name="option" 
                        value="<?php echo $option['code'] ?>">
                        <!-- id➡ラジオボタンの識別子。labelと対応させるため -->
                         <!-- type=radio➡ラジオボタンを作る指定 -->
                          <!-- 複数の候補から一つだけ選ぶ -->

                          <!-- name=option➡同じグループのラジオボタンをひとまとめにする名前。同じnameのラジオは一つだけ選択できる。 -->
                         <!-- value= ➡選択されたときに送信される値   -->


                        <label class="quiz-form__label" 
                        for="<?php echo $option['code'] ?>">
                         <!-- どの<input>に対するラベルかを指定。ここでは上のidと同じ値を入れる -->

                          <?php echo $option['code'] ?>
                          <!-- phpで取り出した値をHTMLに埋め込みブラウザに表示する、ユーザーに見せる文字 -->

                        </label>   
                    </div>
                    <?php endforeach; ?>
                    <!-- phpのforeach文を終了させるための構文 -->
                </div> 
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">
                        回答
                    </button>
                </div>
            </form>
        </div>
    </main>   
</body>
</html>