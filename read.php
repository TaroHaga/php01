
<?php

// ファイルを変数に格納
$filename = 'date.txt';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

while(!feof($fo)){

// fgetsでファイルを読み込み、変数に格納
$txt = fgets($fp);
 
// ファイルを読み込んだ変数を出力
echo $txt.'<br>';
 
}

// fcloseでファイルを閉じる
fclose($fp);

?>


<html>
<head>
<meta charset="utf-8">
<title>READ </title>
</head>
<body>
<h1>tekisuto 
    
</h1>
<ul>
<li><a href="post.php">posix_times.php</a></li>
</ul>
</body>
</html>

