<?php
function searchCityTime($city_name)
//function➡phpで関数を定義するためのキーワード
//ひとまとまりの処理に名前をつける
//searchCityTime➡関数の名前。自分で好きな名前をつけられる。
//$city_name➡関数か受け取る引数
{
require('config/cities.php');
//外部ファイルcities.phpファイルを読み込んでその中に書かれた$citiesデータを使えるようにする

foreach ($cities as $city) {
    //$sities配列の中に入っている都市データを１件ずつ取り出すループ処理

    if ($city['name'] === $city_name) {
        //$city['name']➡現在の都市データの名前
        //city_name➡関数の引数として受け取った都市名
        //この２つが完全に一致しているかを判定

        $date_time = new DateTime('', new DateTimeZone($city["time_zone"]));
        /*
        DateTimeクラスを使ってその都市の現在時刻を取得している
        new DateTiem()➡phpの「日付と時刻」を扱うためのオブジェクトを作る構文
        ここでは''（空文字）をいれてるので「今の時刻」を表す
        new DateTimezone($city["time_zone"])➡タイムゾーン（時差）を設定するクラス。引数に$city["time_zone"]変数を渡すことで指定された国の現在時刻を指定することができる。*/

        $time = $date_time->format('H:i');
       /* ->とはオブジェクトの中の「プロパティ」や「メソッド」にアクセスする記号
        format()はDateTimeオブジェクトのメソッド(関数)で
        日付や時刻を指定の形式で文字列に変換する*/

        $city['time'] = $time;
        return $city;
      }      
  }
}