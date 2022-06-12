<?php
$utada =$_POST["utada"]; 
$paku = $_POST["paku"];
$name = $_POST["name"];
$mail = $_POST["mail"];
$c = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$utada.$c.$paku.$c.$name.$c.$mail;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>


<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>