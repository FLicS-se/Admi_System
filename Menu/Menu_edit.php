<!DOCTYPE html>
<html lang="ja">
<head>
<title>ふらっとやまだ: お品書き編集</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Menu.css"/>
</head>

<body>
<div id="site-box">

<center>
<div id="title">
<h1> お品書き編集 </h1>
</div>
</center>

<div id="description">
<?php
if ($_REQUEST['menu'] == '') {
	print('戻るボタンを押してメニューを選択してください。');
}
foreach($_REQUEST['menu'] as $reserve) {
	print('現在、' . htmlspecialchars($reserve, ENT_QUOTES) . 'を編集しています。<br />');
	
}
?>
</div>

<div id="info">
<form>
<dl>

<dt>お品書き名</dt>
<dd><input id="name" name="tenpo" type="text" id="tenpo" size="50" maxlength="32" /></dd>
<dt>概要</dt>
<dd>
<textarea name="about" id="about" cols="50" rows="10"></textarea>
</dd>
</dl>
</form>
</div>

<div id="update">
<form action="./Menu_update.php" method="post">
<input id="update_button" type="submit" value="同期" >
</form>
</div>

<div id="back">
<form action="./Menu.html" method="post">
<input id="back_button" type="submit" value="戻る" >
</form>
</div>

</body>
</html>
