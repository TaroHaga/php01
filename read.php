<!DOCTYPE html>
<html>
<head>
<title>CSVデータ表示</title>
<meta charset="utf-8">
</head>
<body>
 
<table border='1'>
<tr>
    <th>日付</th>
    <th>時間</th>
    <th>宇多田好き？</th>
    <th>パクチー好き？</th>
    <th>名前</th>
    <th>アドレス</th>
</tr>
 






<?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo nl2br($str);// nl2br() ... 改行文字を追加
}
fclose($file); // ファイルを閉じる?>




