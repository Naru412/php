<?php
require_once('config/status_codes.php');

$answer_code = isset($_POST['answer_code']) ?  htmlspecialchars($_POST['answer_code'], ENT_QUOTES) : null;
/*isset($_POST['answer_code'])➡フォームからanswer_codeが送信されているかを確認する。  存在すればture、なければfalse
isset()がtureなら→htmlspecialchars()でサニタイズ
isset()がfalseなら→nullを代入*/

$option = isset($_POST['option']) ?  htmlspecialchars($_POST['option'], ENT_QUOTES) : null; 

if (empty($option)) {

    header('Location: index.php');
    exit;
}
    /*empty()は「変数が存在しない」または「空値」のときにtrueを返す。
    つまりifは選択肢が空、未送信、0のように偽扱いのときになりブロック内が実行される。
    実用上はユーザーが選択肢を選ばずに送信したときにリダイレクトしたい意図。
    
    header関数➡option変数が存在しなかったとき、つまりindex.phpファイルで回答の選択肢を選ばなかったときにindex.phpにリダイレクトするようにしている。
    
    exit➡リスクリプトの実行を即座に終了する。
    　　　header()のあとにexitを書かないとその下のコードが続けて実行されてしま　　　う可能性がある。リダイレクト処理ではセットで使う。*/
foreach ($status_codes as $status_code) {
    //$status_codesの配列の中身を一つずつとりだしている
    if ($status_code['code'] === $answer_code) {
        //もし配列の中のcodeが$answer_codeと同じなら、という条件
        $code = $status_code['code'];
        $description = $status_code['description'];
        /*もし条件にあうデータが見つかったらそのデータの中から「コード」
        と「説明」の値をとりだして
        $codeと$descriptionという変数にいれる。*/
    }
} 
$result = $option === $code;
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
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Sataus Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
                <?php if ($result): ?>
                    <!-- $resultがtrueのときだけ次のHTMLを実行する -->
                <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                   <!-- それ以外(false)のときに実行する -->
                <h2 class="resrlt__text--incorrect">不正解</h2>
                <?php endif; ?>
                <!-- ifの終わりを示す -->
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text">
                        <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text">
                        <?php echo $description ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>